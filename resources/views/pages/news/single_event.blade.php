@extends('components.layout')

@section('content')

    @include('components.breadcrumbs', ['previous' => __('links.events'), 'title' => $event->title ])

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h4>Event Date : {{$event->event_date->format('d.m.Y')}}</h3>
            </div>
            <div class="col-12">
                <h4>Event Type: {{$event->event_type}}</h3>
            </div>
            <div class="col-12">
                <h4>Event Location: {{$event->event_location}}</h3>
            </div>
            <div class="col-12">
                <h4>Event Organizer: {{$event->event_organizer}}</h3>
            </div>
            <div class="col-12 text-center">
                <img class="px-5" width="100%" src="{{$event->image('event', 'single_event')}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <p class="text-center">{{ $event->date }}</p>
                <p class="text-center">{!! $event->description !!}</p>
            </div>
        </div>
    </div>

@endsection
