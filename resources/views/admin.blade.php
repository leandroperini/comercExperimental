@extends('layouts.app')

@push('css.vendor')
    <link href="{{ asset('vendors/bootgrid/jquery.bootgrid.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="block-header">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                {{ session('status') }}
            </div>
        @endif
        <h2>{{__('Numbers Management')}}</h2>

        <ul class="actions">
            <li class="dropdown">
                <a href="" data-toggle="dropdown">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a onclick="General.modals.events.modal_report_insert_show()">{{__('Add Numbers')}} <i
                                    class="zmdi zmdi-plus"></i></a>
                    </li>
                    <li>
                        <a href="">{{__('View Dashboard')}} <i class="zmdi zmdi-view-dashboard"></i></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>{{__('Existing Numbers')}}
                <small>{{__('List of numbers current available')}}</small>
            </h2>
        </div>

        <table id="data-table-admin" class="table table-striped table-vmiddle">
            <thead>
            <tr>
                <th data-identifier="true" data-column-id="id" data-formatter="id" data-type="numeric">{{__('ID')}}</th>
                <th data-column-id="name">{{__('NAME')}}</th>
                <th data-column-id="value" data-order="desc">{{__('VALUE')}}</th>
                <th data-column-id="created_at" data-formatter="datetime" data-order="desc">{{__('DATE/HOUR')}}</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">{{__('COMMANDS')}}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            </tr>
            </tbody>
        </table>
    </div>
    @include('modals.reports.edit')
    @include('modals.reports.insert')
@endsection


@push('js.vendor')
    <script src="{{ asset('vendors/bootgrid/jquery.bootgrid.updated.min.js') }}" defer></script>
@endpush
