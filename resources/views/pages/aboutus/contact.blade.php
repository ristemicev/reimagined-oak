@extends('components.layout')

@section('content')

    @include('components.breadcrumbs', ['previous' => __('links.about'),'title' => __('links.contact')])
@endsection
