<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('elements.header')

<body class="@yield('body.class')">
<div style="">
    <div>
        @yield('content')
    </div>
    @include('elements.footer', [
    'footer'=>'false',
    ])
    <footer class="footer bgm-comerc">
        <ul class="footer-inner">
            <li class="hidden-xs pull-left m-t-15 f-40 c-verde-comerc">
                <span class="p-r-15"
                      style="border-right-style: dotted;">{{@$tempo->data->date?:\Carbon\Carbon::now('H:i')}}</span>
                <span>{{@$tempo->name?:'São Paulo'}}</span> - <span>{{@$tempo->data->temperature?: '00'}}Cº</span>
            </li>
            <li class="hidden-xs" style="margin-top: -7px">
                <a href="{{ route('home') }}"><img class="m-t-30" src="{{asset('img/comerc_energia_branco.png')}}"
                                                   height="50px" alt=""></a>
            </li>
            <li class="hidden-md hidden-lg hidden-sm" style="margin-top: -7px">
                <a href="{{ route('home') }}"><img class="m-t-44" src="{{asset('img/comerc_energia_branco.png')}}"
                                                   height="25px" alt=""></a>
            </li>
        </ul>
    </footer>
</div>
</body>
</html>
