<!doctype html>
<html lang={{ app()->getLocale() }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '友叹')</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('afterCss')
</head>
<body>

    <div id="app" class="{{ route_class() }}-page">

        {{-- 头部 --}}
        <div id="header">

            @include('layouts._header', ['categories' => app(\App\Models\Category::class)->categories()])

        </div>

        <div id="content" style="margin-top: 30px;">

            <div class="container" style="max-width: 1000px;">

                {{-- 提示信息 --}}
                @include('shared._message')

            </div>

            {{-- 内容 --}}
            @yield('content')

        </div>

        <div id="footer">

            <div class="blog-site">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <dt>服务商</dt>
                            <dd>
                                <img src="/images/tengxunyun.png" alt="腾讯云" title="腾讯云">
                            </dd>
                        </div>
                        <div class="col-md-2">
                            <dt>开发宝典</dt>
                            <dd><a href="#">PHP手册</a></dd>
                            <dd><a href="#">Laravel手册</a></dd>
                            <dd><a href="#">Mysql手册</a></dd>
                        </div>
                        <div class="col-md-2">
                            <dt>学习路线</dt>
                            <dd><a href="#">Python学习指南</a></dd>
                            <dd><a href="#">Laravel学习指南</a></dd>
                            <dd><a href="#">Linux学习指南</a></dd>
                            <dd><a href="#">Mysql学习指南</a></dd>
                        </div>
                        <div class="col-md-2">
                            <dt>面试王中王</dt>
                            <dd><a href="#">PHP面试库</a></dd>
                            <dd><a href="#">简历模板</a></dd>
                            <dd><a href="#">Mysql面试宝典</a></dd>
                            <dd><a href="#">Linux面试宝典</a></dd>
                        </div>
                        <div class="col-md-2">
                            <dt>关注</dt>
                            <dd><a href="#">产品技术日志</a></dd>
                            <dd><a href="#">社区运营日志</a></dd>
                            <dd><a href="#">市场运营日志</a></dd>
                            <dd><a href="#">团队日志</a></dd>
                        </div>
                        <div class="col-md-2">
                            <dt></dt>
                            <dd>
                                <img src="/images/qcode.jpg" alt="谢谢关注" title="谢谢关注">
                            </dd>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 底部 --}}
            @include('layouts._footer')

        </div>

    </div>

    {{-- Scripts --}}
    <script src="{{ mix('js/app.js') }}"></script>

    @yield('afterJs')
</body>
</html>