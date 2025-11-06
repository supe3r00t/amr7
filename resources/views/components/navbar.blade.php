<header>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="AMR-7" height="36">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">{{ __('site.home') }}</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">{{ __('site.about') }}</a></li>
                    <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">{{ __('site.services') }}</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">{{ __('site.contact') }}</a></li>

                    <li class="nav-item ms-3">
                        @if(app()->getLocale() === 'ar')
                            <a class="nav-link" href="{{ route('lang.switch', 'en') }}">EN</a>
                        @else
                            <a class="nav-link" href="{{ route('lang.switch', 'ar') }}">AR</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
