<!-- @extends('layouts.app') -->

@section('content')
  <!-- Page Header -->
  <header class="masthead">
    <div class="page-header">
      <h2>홈페이지</h2>
      <div>
        <div>
          <img style="width:100%;" src="http://127.0.0.1:8000/img/home-bg.jpg" alt="Background Image">
        </div>
        <div>
          @if (Auth::guest())
          <form style="border: 1px solid black" action="{{ route('sessions.store') }}" method="POST" role="form" class="form__auth">
            {!! csrf_field() !!}
            <div>
              <input type="email" name="email"  placeholder="이메일" value="admin@mail.com" autofocus />
            </div>
            <div>
              <input type="password" name="password"  placeholder="비밀번호" value="secret">
            </div>
            <div>
              <button class="btn" type="submit">
                로그인
              </button>
              <a class="btn" href="{{ route('users.create') }}">회원가입</a>
            </div>
          </form>
          @else
          <form style="border: 1px solid black" action="{{ route('sessions.destroy') }}" method="GET" role="form" class="form__auth">
            {!! csrf_field() !!}
            <div>
              <label for="">이메일 : </label>
              <label for="">{{ Auth::user()->name }}</label>
            </div>
            <div>
              <button class="btn" type="submit">
                로그아웃
              </button>
            </div>
          </form>
          @endif
        </div>
      </div>
    </div>
  </header>
@stop