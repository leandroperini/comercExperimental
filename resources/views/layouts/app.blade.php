<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('elements.header')

<body class="@yield('body.class')">
<header id="header" class="clearfix bgm-comerc">
    <ul class="header-inner">
        <li class="hidden-xs" style="margin-top: -7px">
            <a href="{{ route('home') }}" class="m-l-10"><img src="{{asset('img/comerc_energia_branco.png')}}"
                                                              height="50px" alt=""></a>
        </li>
        <li class="hidden-md hidden-lg hidden-sm" style="margin-top: -7px">
            <a href="{{ route('home') }}" class="m-l-10"><img class="m-t-10" src="{{asset('img/comerc_energia_branco.png')}}"
                                                              height="25px" alt=""></a>
        </li>

        <li class="pull-right">
            <ul class="top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li class="">
                            <a href="{{route('logout')}}"><i class="tm-icon zmdi zmdi-power"></i> {{__('Logout')}}</a>
                        </li>
                        <li class="">
                            <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> {{__('Toggle
                                Fullscreen')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</header>
<section id="main">
    <div class="container">
        @yield('content')
    </div>
</section>
@include('elements.footer')
</body>
</html>
