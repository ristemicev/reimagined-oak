@extends('components.layout')

@section('content')

@include('components.breadcrumbs', ['previous' => __('links.home'), 'title' => __('links.reports') ])

<div class="container">
    <div class="row">
        @foreach ($reports as $report)
        <div class="col-4">
            <div class="card-special mx-auto">
                <div class="card-header-special bg-danger text-white text-center p-2">
                    <div class="date">{{$report?->report_date?->format('d M')}}</div>
                    <div class="year">{{$report?->report_date?->format('Y')}}</div>
                </div>
                <div class="card-body-special">
                    <h5 class="card-title-special text-uppercase">{{$report->title}}</h5>
                    <span><i>{{$report->report_author}}</i></span>
                    {!! $report->description !!}
                    <a href={{route('report', $report?->id)}} class="btn btn-danger">Preberi več</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<style>
    .card-header-special {
        font-size: 1.5rem;
        line-height: 1;
        border-bottom: none;
    }

    .card-header-special .date {
        font-size: 2rem;
    }

    .card-header-special .year {
        font-size: 1.2rem;
    }

    .card-title-special {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text-special {
        font-size: 0.95rem;
    }

    .card-special {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-special .card-header-special {
        position: relative;
        padding: 0.75rem 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .card-special .card-header-special::after {
        content: "";
        position: absolute;
        bottom: -1rem;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #fff;
    }

    .card-body-special {
        padding: 1.25rem;
    }

    .btn-danger {
        background-color: #dc3545 !important;
        border-color: #dc3545 !important;
    }
</style>

@endsection
