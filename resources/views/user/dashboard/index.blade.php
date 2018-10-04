@extends('user.layouts.user-app')

@section('title', 'Dashboard')

@component('user.layouts.partials._breadcrumbs', [
    'crumbs' => [
        ['title' => 'Dashboard', 'url' => '#']
    ]
])
@endcomponent


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    User Dashboard
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
