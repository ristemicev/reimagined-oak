@extends('components.layout')

@section('content')

@include('components.breadcrumbs', ['previous' => __('links.about'), 'title' => __('links.members')])

@include('components.team')

@endsection
