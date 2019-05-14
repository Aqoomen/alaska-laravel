@extends('alaska-admin::layout.login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3">
          <div id="login">

              <h1>Вход</h1>

              <hr>

              <form class="form" role="form" method="POST" action="{{ route('admin-post-login') }}">

                  {!! csrf_field() !!}

                  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} mb-2">
                      <input type="email" class="form-control text-center" name="email" value="{{ old('email') }}" placeholder="Email..." autofocus>
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-2">
                      <input type="password" class="form-control text-center" name="password" placeholder="Пароль">
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>

                  <hr>

                  <button type="submit" class="btn btn-primary btn-block mb-2">
                      <i class="fa fa-btn fa-sign-in"></i> Войти
                  </button>

                  <a class="btn btn-secondary btn-block" href="{{ route('admin-password-forgot') }}">
                      <i class="fa fa-btn fa-question-mark"></i> Забыли пароль ?
                  </a>

              </form>

          </div>
        </div>
    </div>
</div>

@endsection
