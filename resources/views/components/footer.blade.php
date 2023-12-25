<!-- <div class="container">
    <footer class="row row-cols-5 py-5 my-5 border-top">
        <div class="col">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <img width="60" height="60" src="{{asset('/assets/images/logo1n.png')}}" alt="Logo">
            </a>
            <p class="text-muted">© 2023</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                        s
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
        <div class="col">
        </div>

        <div class="col">
            <h5>{{ __('links.about') }}</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/about">{{ __('links.abouttheclub') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/contact">{{ __('links.contact') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/members">{{ __('links.members') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/rules">{{ __('links.rules') }}</a></li>
            </ul>
        </div>
        <div class="col">
            <h5>{{ __('links.news') }}</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/events">{{ __('links.events') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/school">{{ __('links.school') }}</a></li>
            </ul>
        </div>
        <div class="col">
            <h5>
                <a class="nav-link" href="/reports">{{__('links.reports')}}</a>
            </h5>
        </div>
    </footer>
</div> -->
<div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-2">
      <h5>{{ __('links.about') }}</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/about">{{ __('links.abouttheclub') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/contact">{{ __('links.contact') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/members">{{ __('links.members') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/rules">{{ __('links.rules') }}</a></li>
            </ul>
      </div>

      <div class="col-2">
      <h5>{{ __('links.news') }}</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/events">{{ __('links.events') }}</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="/school">{{ __('links.school') }}</a></li>
            </ul>
      </div>

      <div class="col-2">
        <h5>
                <a class="nav-link" href="/reports">{{__('links.reports')}}</a>
            </h5>
      </div>

      <div class="col-4 offset-1">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© 2023 Company, Inc. All rights reserved.</p>
    </div>
  </footer>
</div>
