@extends('layouts.app')

@section('title', '首页')

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

                    {{-- 分类开始 --}}
                    <div class="blog-category-new clearfix">
                        <div class="category-item"><i class="fa fa-th-large"></i> 全部分类</div>
                        <div class="category-item">人工智能</div>
                        <div class="category-item">Laravel</div>
                        <div class="category-item">PHP</div>
                    </div>
                    {{-- 分类结束 --}}

                    {{-- 文章开始 --}}
                    <div class="blog-article clearfix">
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-1.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-2.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-3.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-4.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-5.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-6.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-7.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-article-child">
                            <a href="#" >
                                <div class="cover">
                                    <img src="/images/article-8.jpg">
                                </div>
                            </a>
                            <div class="item">
                                <div class="info d-flex">
                                    <a href="javascript:;" class="item-title mr-auto">[干货]ECMAScript高效入门：看这一篇就够了！</a>
                                    <a href="javascript:;" class="item-category">设计教程</a>
                                </div>
                                <div class="data" style="overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式[干货]ECMAScript高效入门：看这一篇就够了！ API 数据格式</div>
                            </div>
                        </div>
                        <div class="blog-paginate">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">上一页</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- 文章结束 --}}
                </div>
                <!-- 内容结束 -->
            </div>
            <div class="col-md-4">
                <div class="blog-login text-center">
                    <div class="hello">Hi,亲爱的小伙伴！</div>
                    <div class="welcome">欢迎来到 usigh 社区！</div>
                    <div class="point">注册 <i class="far fa-hand-point-right"></i> 登录，更多惊喜</div>
                    <a class="btn bg-green" style="margin-right: 10px; color: #fff;">登陆</a><a class="btn bg-yellow" style="color: #fff;">注册</a>
                </div>
                <div class="blog-board">
                    <div class="board-title">
                        <span class="text"><strong><i class="fa fa-bullhorn"></i> &nbsp;公告栏</strong></span>
                        <span class="versions bg-yellow float-right">v1.0.1</span>
                    </div>
                    <div class="board-content text-center">USIGH - 基于 Laravel 5.5 开发</div>
                </div>
                <div class="blog-board">
                    <div class="board-title">
                            <span class="text">
                                <strong><i class="fa fa-list-ul"></i> &nbsp;推荐文章</strong>
                            </span>
                        <span class="second-text float-right">
                                <a href="#">More <i class="fa fa-plus"></i></a>
                            </span>
                    </div>
                    <div class="board-content">
                        <div class="suggested-article">
                            <div class="sign bg-pink">1</div>
                            <div class="info">
                                <a href="javascript:;" class="title">Git服务器利用hookGit服务器利用hook</a>
                                <div class="hot float-right"><i class="fas fa-thermometer-half  bg-pink-c"></i> &nbsp;789</div>
                            </div>
                        </div>
                        <div class="suggested-article">
                            <div class="sign bg-yellow">2</div>
                            <div class="info">
                                <a href="javascript:;" class="title">Git服务器利用hookGit服务器利用hook</a>
                                <div class="hot float-right"><i class="fas fa-thermometer-half  bg-pink-c"></i> &nbsp;789</div>
                            </div>
                        </div>
                        <div class="suggested-article">
                            <div class="sign bg-yellow">3</div>
                            <div class="info">
                                <a href="javascript:;" class="title">Git服务器利用hookGit服务器利用hook</a>
                                <div class="hot float-right"><i class="fas fa-thermometer-half  bg-pink-c"></i> &nbsp;789</div>
                            </div>
                        </div>
                        <div class="suggested-article">
                            <div class="sign bg-blue">4</div>
                            <div class="info">
                                <a href="javascript:;" class="title">Git服务器利用hookGit服务器利用hook</a>
                                <div class="hot float-right"><i class="fas fa-thermometer-half  bg-pink-c"></i> &nbsp;789</div>
                            </div>
                        </div>
                        <div class="suggested-article">
                            <div class="sign bg-blue">5</div>
                            <div class="info">
                                <a href="javascript:;" class="title">Git服务器利用hookGit服务器利用hook</a>
                                <div class="hot float-right"><i class="fas fa-thermometer-half  bg-pink-c"></i> &nbsp;789</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-ad">
                    <img src="/images/ad-1.png" alt="">
                </div>
                <div class="blog-ad">
                    <img src="/images/ad-3.png" alt="">
                </div>
                <div class="blog-ad">
                    <img src="/images/ad-2.png" alt="">
                </div>
                <div class="blog-board">
                    <div class="board-title">
                        <span class="text">
                            <strong><i class="fa fa-link"></i> &nbsp;友情链接</strong>
                        </span>
                    </div>
                    <div class="board-content">
                        <div class="row">
                            <div class="col-6 blog-link"><a href="#">Laravel社区</a></div>
                            <div class="col-6 blog-link"><a href="#">Laravel社区</a></div>
                            <div class="col-6 blog-link"><a href="#">Laravel社区</a></div>
                            <div class="col-6 blog-link"><a href="#">Laravel社区</a></div>
                            <div class="col-6 blog-link"><a href="#">Laravel社区</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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