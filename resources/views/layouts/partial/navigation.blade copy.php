<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse" >
                collapse
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <!-- 추가 !!!!!@@#!!@!@@ -->
            @if (Auth::guest())
            <a href="{{ route('sessions.create') }}">로그인</a>
            <a href="{{ route('users.create') }}">회원가입</a>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('sessions.destroy') }}">
                            로그아웃
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <a href="{{ route('members.index') }}">멤버소개</a>
            <!-- 추가 !!!!!@@#!!@!@@ -->
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
                <li>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <!-- sessions.create라는 view를 부르는게 아니라 web.php에서 as한 라우터를 부르는 거임
                    (근데 결국 저 라우터에서 sessions.create라는 뷰를 부르니까 같은 기능)-->
                
                <!-- 수정한다 !!!!!@@#!!@!@@ -->
                @if (Auth::guest())
                <li><a href="{{ route('sessions.create') }}">로그인</a></li>
                <li><a href="{{ route('users.create') }}">회원가입</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('sessions.destroy') }}">
                                로그아웃
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <!-- 수정한다 !!!!!@@#!!@!@@ -->

            </ul>
        </div>
    </div>
</nav>