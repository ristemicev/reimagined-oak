@extends('components.layout')

@section('content')

    @include('components.breadcrumbs', ['previous' => __('links.news'), 'title' => __('links.events')])

    <div class="container py-5">
        <div class="row">
            @foreach($events as $event)
                <div class="col d-flex justify-content-center p-4">
                    @include('components.card', [ 'data' => $event ])
                </div>
            @endforeach
        </div>
    </div>

@endsection
