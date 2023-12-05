<!-- Page Header Start -->
<div class="header container-fluid bg-dark page-header py-5 {{ isset($bottom_margin) ? ($bottom_margin ? 'mb-5' : '') : 'mb-5' }}">
    <div class="container py-5">
        <h1 class="display-3 mb-3 text-white animated slideInDown">{{$title}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                @if(isset($previous))
                    <li class="breadcrumb-item"><a class="text-white" href="{{asset('/')}}">{{$previous}}</a></li>
                @endif
                @if(isset($subtitle) && isset($subtitle_url))
                    <li class="breadcrumb-item"><a class="text-white" href="{{$subtitle_url}}">{{$subtitle}}</a></li>
                @endif
                <li class="breadcrumb-item text-white active" aria-current="page">{{$title}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
