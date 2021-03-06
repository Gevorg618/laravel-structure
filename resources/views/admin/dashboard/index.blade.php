@extends('admin.layouts.admin-app')

@section('title', 'Address Geo Code')

{{-- @component('admin::layouts.partials._breadcrumbs', [
    'crumbs' => [
      ['title' => 'Geo', 'url' => '#'],
      ['title' => 'Address Geo Code', 'url' => route('admin.geo.address')]
    ],
    'actions' => [
      ['title' => 'Geo Code', 'url' => route('admin.geo.address.create_geo_code')],
    ]
])
@endcomponent --}}

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="datatable">
                                <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Country</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Created At</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')

@endpush