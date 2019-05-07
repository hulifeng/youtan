@extends('layouts.app')

@section('title', isset($category) ? $category->name : '文章列表')

@section('afterCss')
    <link rel="stylesheet" href="/assets/swiper/swiper.min.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/assets/media/phone.css">
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1024px)" href="/assets/media/tablet.css">
    <link rel="stylesheet" media="screen and (min-width: 1025px) and (max-width: 1200px)" href="/assets/media/desktop.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="/assets/media/desktop_hd.css">
@stop

@section('content')
    <div class="container" style="max-width: 1000px;">
        <div class="row">
            <div class="col-md-8 col-12">
                <!-- 内容 -->
                <div class="blog-content">
                    <!-- 轮播开始 -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/images/2.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/images/1.jpg" alt=""></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- 轮播结束 -->

                    {{-- 文章开始 --}}
                    <div class="blog-article clearfix">
                        <div class="order">
                            <a class="new {{ active_class(! if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=default">最新回复</a> | <a class="reply {{ active_class(if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=recent">最新发布</a>
                        </div>
                        {{-- 文章列表 --}}
                        @include('topics._topic_list')

                        {{-- 分页 --}}
                        <div class="blog-paginate">
                            {!! $topics->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>
                    {{-- 文章结束 --}}
                </div>
                <!-- 内容结束 -->
            </div>
            <div class="col-md-4">
                @include('topics._sidebar')
            </div>
        </div>
    </div>
@stop

@section('afterJs')
    <script src="/assets/swiper/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                // disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@stop