<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img width="60" height="60" src="{{asset('/assets/images/logo1n.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        {{ __('links.about') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/about">{{ __('links.abouttheclub') }}</a></li>
                        <li><a class="dropdown-item" href="/contact">{{ __('links.contact') }}</a></li>
                        <li><a class="dropdown-item" href="/members">{{ __('links.members') }}</a></li>
                        <li><a class="dropdown-item" href="/rules">{{ __('links.rules') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        {{ __('links.news') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/events">{{ __('links.events') }}</a></li>
                        <li><a class="dropdown-item" href="/school">{{ __('links.school') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reports">{{__('links.reports')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
