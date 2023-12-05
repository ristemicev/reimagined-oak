@extends('components.layout')

@section('content')

    @include('components.breadcrumbs', ['previous' => __('links.news'), 'title' => __('links.events')])
@endsection
