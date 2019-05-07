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
<div class="blog-board">
    <div class="board-title">
        <span class="text">
            <strong><i class="fa fa-tags"></i> &nbsp;标签</strong>
        </span>
    </div>
    <div class="board-content">
        <ul class="tags clearfix">
            @foreach(\App\Models\Tag::all() as $tag)
                <li class="item"><a href="javascript:;">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
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