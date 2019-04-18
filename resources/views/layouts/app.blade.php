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

            @include('layouts._header')

        </div>

        <div id="content">

            <div class="container" style="max-width: 1000px;">

                {{-- 提示信息 --}}
                @include('shared._message')

            </div>

            {{-- 内容 --}}
            @yield('content')

        </div>

        <div id="footer">

            {{-- 底部 --}}
            @include('layouts._footer')

        </div>

    </div>

    {{-- Scripts --}}
    <script src="{{ mix('js/app.js') }}"></script>

    @yield('afterJs')
</body>
</html>