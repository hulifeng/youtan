@extends('layouts.app')

@section('title', $topic->excerpt)

@section('afterCss')

@endsection

@section('content')
    <div class="container" style="max-width: 1000px;">
        <div class="row">
            <div class="col-md-8 col-12">
                <!-- 内容 -->
                <div class="blog-detail">
                    <!--原创图标-->
                    <div class="blog-original">
                        <img src="/images/original.png" alt="原创" title="原创">
                    </div>
                    <!--标签-->
                    @if($topic->tags)
                        <div class="blog-tag">
                            @foreach($topic->tags as $tag)
                                <div class="item">{{ $tag->name }}</div>
                            @endforeach
                        </div>
                    @endif
                    <div class="blog-detail-title">{{ $topic->title }}</div>
                    <!--摘要信息-->
                    <div class="blog-detail-summary">
                        <div class="item">
                            <i class="fa fa-user"></i> {{ $topic->user->name }}
                        </div>
                        <div class="item">
                            <i class="fa fa-clock-o"></i> {{ date("Y-m-d", strtotime($topic->created_at)) }}
                        </div>
                        <div class="item">
                            <i class="fa fa-folder"></i> {{ $topic->category->name }}
                        </div>
                        <div class="text pull-right">{{ $topic->view_count }} 浏览 | {{ $topic->reply_count }} 评论</div>
                    </div>
                    <!--内容-->
                    <div class="blog-detail-content">
                        {!! $topic->content !!}
                    </div>
                    <!--点赞-->
                    <div class="blog-detail-likes">
                        <a href="#"><i class="fa fa-thumbs-up"></i> 点赞（12）</a>
                    </div>
                </div>
                <!-- 内容结束 -->
                <div class="clearfix"></div>

                <!--分割线-->
                <div class="parting">
                    <span class="line"></span>
                    <span class="text">留下点什么吧！</span>
                    <span class="line"></span>
                </div>
                <!--分割线结束-->

                <!--留言-->
                <div class="blog-message">
                    <div class="blog-message-area">
                        <div class="message-title">留言</div>
                        <textarea name="message" id="message" class="message" cols="30" rows="5"></textarea>
                        <div class="author-info">
                            <div class="item"><input type="text" name="username" placeholder="昵称"></div>
                            <div class="item"><input type="text" name="email" placeholder="邮箱"></div>
                            <div class="item"><input type="text" name="site" placeholder="网站"></div>
                        </div>
                        <button class="btn bg-green btn-block">提交</button>
                    </div>
                </div>
                <!--留言结束-->

                <!--分割线-->
                <div class="parting">
                    <span class="line"></span>
                    <span class="text"><i class="fa fa-graduation-cap"></i> 神评论</span>
                    <span class="line"></span>
                </div>
                <!--分割线结束-->

                <!--留言新-->
                @include('topics._reply_list')
                <!--留言新结束-->

                <!--分割线-->
                <div class="parting">
                    <span class="line"></span>
                    <span class="text"><i class="fa fa-heart"></i> 猜你喜欢</span>
                    <span class="line"></span>
                </div>
                <!--分割线结束-->

                <!--推荐文章-->
                @include('topics._recommend_article')
                <!--推荐文章结束-->

            </div>

            @include('topics._detail_sidebar')

        </div>
    </div>
@endsection

@section('afterJs')

@endsection
