<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img width="60" height="60" src="{{asset('/assets/images/logo1n.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @foreach ($pages as $page)
                <li class="nav-item dropdown px-1">
                    <a class="nav-link dropdown-toggle" href={{route('pages', $page->slug)}} role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ $page->title }}
                    </a>
                    @if ($page->children)
                    <ul class="dropdown-menu">
                        @foreach ($page->children as $subpage)
                        <li><a class="dropdown-item" href={{route('pages', $page->slug."/".$subpage->slug)}}>{{$subpage->title}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
                <li class="nav-item dropdown px-1">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('links.news') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/events">{{ __('links.events') }}</a></li>
                        <li><a class="dropdown-item" href="/school">{{ __('links.school') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="/reports">{{__('links.reports')}}</a>
                </li>
                <li class="nav-item px-1">
                    @include('components.language_switcher')
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
