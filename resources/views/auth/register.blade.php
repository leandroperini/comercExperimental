@extends('layouts.login')

@section('content')
    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">{{ __('Register') }}</div>--}}

    {{--<div class="card-body">--}}
    {{--<form method="POST" action="{{ route('register') }}">--}}
    {{--@csrf--}}

    {{--<div class="form-group row">--}}
    {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="name" type="text"--}}
    {{--class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"--}}
    {{--name="name" value="{{ old('name') }}" required autofocus>--}}

    {{--@if ($errors->has('name'))--}}
    {{--<span class="invalid-feedback">--}}
    {{--<strong>{{ $errors->first('name') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="email"--}}
    {{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email"--}}
    {{--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
    {{--name="email" value="{{ old('email') }}" required>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="invalid-feedback">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="password"--}}
    {{--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password"--}}
    {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
    {{--name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="password-confirm"--}}
    {{--class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control"--}}
    {{--name="password_confirmation" required>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-6 offset-md-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--{{ __('Register') }}--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

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
@endsection
