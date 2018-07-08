{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.authentication')

@section('content')
  <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
    @csrf

    <div class="object">
      <object type="image/svg+xml" data="ORBITLogo.svg" width="65%" align="middle"></object>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter Username">
      <input autocomplete="off" class="input100" type="text" value="{{ old('username') }}"
      name="username" autofocus>
      <span class="focus-input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" data-placeholder="Username"></span>
    </div>
    @if ($errors->has('username'))
        <i class="error">{{ $errors->first('username') }}</i>
    @endif

    <div class="wrap-input100 validate-input" data-validate="Enter password">
      <span class="btn-show-pass">
        <i class="zmdi zmdi-eye"></i>
      </span>
      <input class="input100" type="password" name="password" value="{{ old('password') }}">
      <span class="focus-input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" data-placeholder="Password"></span>
    </div>
    @if ($errors->has('password'))
        <i class="error">{{ $errors->first('password') }}</i>
    @endif

    <label class="rememberMe">Remember Me
      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
      <span class="checkmark"></span>
    </label>

    <div class="container-login100-form-btn">
      <div class="wrap-login100-form-btn">
        <div class="login100-form-bgbtn"></div>
        <button class="login100-form-btn" type="submit">
          Login
        </button>
      </div>
    </div>

    <div class="container-login100-form-btn">
      <div class="wrap-login100-form-btn">
        <div class="login100-form-bgbtn"></div>
        <a class="login100-form-btn" href="{{ route('register') }}">
          Sign Up
        </a>
      </div>
    </div>

    <div class="text-center p-t-50">
      <span class="txt1">
        Lupa Password?
      </span>

      <a class="signUp" href="{{ route('password.request') }}">
        Klik disini!
      </a>
    </div>
  </form>
@endsection
