@extends('layouts.dashboard')

@push('css.vendor')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="card col-md-12" id="profile-main" style="height: 100vh;">
        <div class="c-overflow col-md-3" style="margin-left: -33px">
            @foreach ($reports as $report)
                <div class="pmo-pic">
                    <div class="pmo-stat bgm-comerc">
                        <h2 class="m-0 c-verde-comerc f-40">{{$report->name}}</h2>
                        <h2 class="m-0 c-white f-80">{{$report->value}}</h2>
                    </div>
                </div>
            @endforeach
        </div>

        <div class=" clearfix col-md-9 p-l-0 m-t-44">

            <div class="col-md-12 m-t-44 p-l-0">
                <div class="pmbb-header col-md-9">
                    <h1 class="w-75 f-50 text-justify"><i class="zmdi zmdi-globe-alt m-r-5"></i> {{$noticia->title}}
                    </h1>
                    <p class="f-30 text-justify">{{$noticia->description}}</p>
                </div>
                <div class="pmbb-body col-md-2">
                    <div class="pmbb-view">
                        <div class="lightbox-item pull-left">
                            <img src="{{$noticia->imagem}}" alt="" width="400px">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 m-t-44 p-l-0">
                <div class="pmbb-header col-md-9">
                    <h1 class="w-75 f-50 text-justify"><i class="zmdi zmdi-globe-alt m-r-5"></i> {{$noticia2->title}}
                    </h1>
                    <p class="f-30 text-justify">{{$noticia2->description}}</p>
                </div>
                <div class="pmbb-body col-md-2">
                    <div class="pmbb-view">
                        <div class="lightbox-item pull-left">
                            <img src="{{$noticia2->imagem}}" alt="" width="400px">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection


@push('js.vendor')
    <script>
        setTimeout(function(){
            window.location.reload(1);
        }, 30000);
    </script>
@endpush
