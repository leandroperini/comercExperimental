@extends('layouts.login')
<form class="lc-block toggled" id="l-register" method="POST" action="{{ route('register') }}">
@csrf
<!-- Register -->
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
        <div class="fg-line {{ $errors->has('name') ? 'has-error' : '' }} {{ $errors->has('name') ? 'has-error' : '' }}">
            <input id="name" type="text" class="form-control"
                   placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autofocus>
            <small class="help-block">{{ $errors->first('name') }}</small>
            @if ($errors->has('name'))
                <span class="zmdi zmdi-close form-control-feedback"></span>
            @endif
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
        <div class="fg-line {{ $errors->has('email') ? 'has-error' : '' }}">
            <input id="email" type="text" class="form-control" placeholder="{{ __('Email Address') }}"
                   name="email" value="{{ old('email') }}" required>
            <small class="help-block">{{ $errors->first('email') }}</small>
            @if ($errors->has('email'))
                <span class="zmdi zmdi-close form-control-feedback"></span>
            @endif
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
        <div class="fg-line {{ $errors->has('password') ? 'has-error' : '' }}">
            <input id="password" type="password" class="form-control" placeholder="{{ __('Password') }}"
                   name="password" required>
            <small class="help-block">{{ $errors->first('password') }}</small>
            @if ($errors->has('password'))
                <span class="zmdi zmdi-close form-control-feedback"></span>
            @endif
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
        <div class="fg-line {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            <input id="password-confirm" type="password" class="form-control"
                   placeholder="{{ __('Confirm Password') }}"
                   name="password_confirmation" required>
            <small class="help-block">{{ $errors->first('password_confirmation') }}</small>
            @if ($errors->has('password_confirmation'))
                <span class="zmdi zmdi-close form-control-feedback"></span>
            @endif
        </div>
    </div>

    <div class="clearfix"></div>

    <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i>
    </button>

    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-red"><a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li data-block="#l-forget-password" class="bgm-orange"><a class=""
                                                                  href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
        </li>
    </ul>
</form>
@section('content')

@endsection
