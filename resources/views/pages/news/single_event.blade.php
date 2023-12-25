@extends('components.layout')

@section('content')

    @include('components.breadcrumbs', ['previous' => __('links.news'), 'title' => $event->title ])

    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">{{ $event->title }}</h1>
                <p class="text-center">{{ $event->date }}</p>
                <p class="text-center">{{ $event->description }}</p>
            </div>
        </div>
    </div>

@endsection
