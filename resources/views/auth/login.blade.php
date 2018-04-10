@extends('layouts.login')

@section('content')

    <!-- Login -->
    <div class="lc-block toggled m-t-30" id="l-login">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" name="email" type="text"
                           class="form-control"
                           placeholder="{{ __('Email') }}" value="{{ old('email') }}" required autofocus>
                    <small class="help-block">{{ $errors->first('email') }}</small>
                    @if ($errors->has('email'))
                        <span class="zmdi zmdi-close form-control-feedback"></span>
                    @endif
                </div>

            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                <div class="fg-line {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" name="password" type="password"
                           class="form-control"
                           placeholder="{{ __('Password') }}" value="{{ old('password') }}" required>
                    <small class="help-block">{{ $errors->first('password') }}</small>
                    @if ($errors->has('password'))
                        <span class="zmdi zmdi-close form-control-feedback"></span>
                    @endif
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="checkbox">
                <label>
                    <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <i class="input-helper"></i>
                    {{ __('Remember Me') }}
                </label>
            </div>

            <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i>
            </button>

            <ul class="login-navigation">
                <li data-block="#l-register" class="bgm-red"><a class=""
                                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                <li data-block="#l-forget-password" class="bgm-orange"><a class=""
                                                                          href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                </li>
            </ul>
        </form>
    </div>
@endsection
