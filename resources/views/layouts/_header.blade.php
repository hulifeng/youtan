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
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fa fa-plus"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">个人中心</a>
                            <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">编辑资料</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>