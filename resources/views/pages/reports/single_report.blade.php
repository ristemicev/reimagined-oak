@extends('components.layout')

@section('content')

@include('components.breadcrumbs', ['previous' => __('links.reports'), 'title' => $report->title ])

<div class="container">
    {!! $report->renderBlocks() !!}

    @auth
    <div class="row">
        // TODO: Comments add

        {{-- @foreach ($report->comments as $comment)

        @endforeach --}}
    </div>
    @endauth


    @can('reporter')
    <div class="row">
        // TODO:
    </div>
    @endcan

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
