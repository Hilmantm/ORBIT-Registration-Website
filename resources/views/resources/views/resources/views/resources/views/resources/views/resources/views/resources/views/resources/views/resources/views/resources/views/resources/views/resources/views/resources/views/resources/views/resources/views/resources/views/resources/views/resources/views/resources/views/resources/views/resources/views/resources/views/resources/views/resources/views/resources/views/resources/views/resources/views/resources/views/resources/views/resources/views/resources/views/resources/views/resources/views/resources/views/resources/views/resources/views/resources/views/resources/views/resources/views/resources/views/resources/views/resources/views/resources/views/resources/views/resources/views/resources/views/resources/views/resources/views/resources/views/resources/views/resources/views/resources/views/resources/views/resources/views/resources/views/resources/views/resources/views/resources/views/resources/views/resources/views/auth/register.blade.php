{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
  <form class="login100-form validate-form" method="post" action="{{ route('register') }}">
    @csrf

    <div class="object">
      <object type="image/svg+xml" data="ORBITLogo.svg" width="65%" align="middle"></object>
    </div>

    {{-- Name field --}}
    <div class="wrap-input100 validate-input" data-validate = "Enter Nama">
      <input autocomplete="off" class="input100" type="text" value="{{ old('username') }}" name="name" autofocus>
      <span class="focus-input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" data-placeholder="Nama"></span>
    </div>
    @if ($errors->has('name'))
        <i class="error">{{ $errors->first('name') }}</i>
    @endif

    {{-- Username field --}}
    <div class="wrap-input100 validate-input" data-validate = "Enter Username">
      <input autocomplete="off" class="input100" type="text" value="{{ old('username') }}" name="username" autofocus>
      <span class="focus-input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" data-placeholder="Username"></span>
    </div>
    @if ($errors->has('username'))
        <i class="error">{{ $errors->first('username') }}</i>
    @endif

    {{-- Email field --}}
    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
      <input autocomplete="off" class="input100" type="email" value="{{ old('email') }}" name="email" autofocus>
      <span class="focus-input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" data-placeholder="E-Mail"></span>
    </div>
    @if ($errors->has('email'))
        <i class="error">{{ $errors->first('email') }}</i>
    @endif

    {{-- Password field --}}
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

    {{-- Confirm Password field --}}
    <div class="wrap-input100 validate-input" data-validate="Enter password Confirm">
      <span class="btn-show-pass">
        <i class="zmdi zmdi-eye"></i>
      </span>
      <input class="input100" type="password" name="password_confirmation">
      <span class="focus-input100" data-placeholder="Confirm Password"></span>
    </div>

    <div class="container-login100-form-btn">
      <div class="wrap-login100-form-btn">
        <div class="login100-form-bgbtn"></div>
        <button class="login100-form-btn" type="submit">
          Sign Up
        </button>
      </div>
    </div>

    <div class="text-center p-t-50">
      <span class="txt1">
        Punya Account?
      </span>

      <a class="signUp" href="{{ route('login') }}">
        Login
      </a>
    </div>
  </form>
@endsection
