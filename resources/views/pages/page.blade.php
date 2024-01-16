@extends('components.layout')

@section('content')

@include('components.breadcrumbs', ['previous' => isset($page->parent) ? $page->parent->title : __('links.home'), 'title' => $page?->title])

<div class="container">
    {!! $page->renderBlocks() !!}
</div>
@endsection
