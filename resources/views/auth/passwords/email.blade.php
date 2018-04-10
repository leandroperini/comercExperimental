@extends('layouts.login')

@section('content')
    <!-- Forgot Password -->
    <div class="lc-block toggled" id="l-forget-password">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            @if (session('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    {{ session('status') }}
                </div>
            @endif
            <p class="text-left">{{ __('Complete the field bellow and if you have been registered, a reset link will be send to you.') }}</p>
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                <div class="fg-line {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input id="email" type="email" class="form-control" placeholder="Email Address" name="email"
                           value="{{ $email ?? old('email') }}" required autofocus>
                    <small class="help-block">{{ $errors->first('email') }}</small>
                    @if ($errors->has('email'))
                        <span class="zmdi zmdi-close form-control-feedback"></span>
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-login btn-danger btn-float"><i
                    class="zmdi zmdi-arrow-forward"></i></button>

            <ul class="login-navigation">
                <li data-block="#l-login" class="bgm-green"><a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li data-block="#l-register" class="bgm-red"><a class=""
                                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            </ul>
        </form>
    </div>


    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">{{ __('Reset Password') }}</div>--}}

                    {{--<div class="card-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}


                        {{--<div class="form-group row">--}}
                            {{--<label for="email"--}}
                                   {{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email"--}}
                                       {{--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"--}}
                                       {{--value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Send Password Reset Link') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
