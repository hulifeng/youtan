<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top" style="z-index: 12;">
    <div class="container nav-blog">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}" style="color: #1ab394;">
            Laravel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">首页</a></li>
                <li class="nav-item"><a class="nav-link" href="#">发现</a></li>
                <li class="nav-item"><a class="nav-link" href="#">文章</a></li>
                <li class="nav-item"><a class="nav-link" href="#">每日精进</a></li>
                <li class="nav-item"><a class="nav-link" href="#">分类</a></li>
                <li class="nav-item"><a class="nav-link" href="#">话题</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fa fa-plus"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
            </ul>
        </div>
    </div>
</nav>