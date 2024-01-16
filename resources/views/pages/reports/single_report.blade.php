@extends('components.layout')

@section('content')

@include('components.breadcrumbs', ['previous' => __('links.reports'), 'title' => $report->title ])

<div class="container">
    {!! $report->renderBlocks() !!}
    <div class="row">
        // TODO: Comments add
    </div>
</div>

<style>
    .forumtitle {
        border-bottom: 1px solid #dbdbdb;
        background-color: #f9f9f9;
        padding: 10px;
        font-size: 13px;
        border-bottom: 2px solid #ddd;
        color: #999;
    }
</style>

@endsection
