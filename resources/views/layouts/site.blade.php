<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="border-bottom">
            <div class="container">
                <nav class="navbar sticky-top navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name', 'Laravel') }}"> 
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavRight" aria-controls="navbarNavRight" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavRight">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</section>

<main class="bg-light">
    @yield('content')
</main>

<footer class="section footer-classic context-dark bg-image bg-secondary pt-5 pb-2">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-4 col-xl-5">
                <div class="pr-xl-4">
                    <a class="brand pb-2" href="index.html">
                        <img class="brand-logo-light" src="{{ asset('img/logo.svg') }}" alt="logo" width="50" height="50">
                    </a>
                    <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                    <!-- Rights-->
                    <p class="rights">
                        <span>&copy; {{ config('app.name', 'Laravel') }} - 2023</span>
                        <span>All Rights Reserved.</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Contacts</h5>
                <dl class="contact-list">
                    <dt class="">Address:</dt>
                    <dd>3396 Collins Avenue, Canal Winchester, Ohio, US.</dd>
                </dl>
                <dl class="contact-list">
                    <dt>Email:</dt>
                    <dd><a href="mailto:info@blog.com">info@blog.com</a></dd>
                </dl>
                <dl class="contact-list">
                    <dt>Phone:</dt>
                    <dd><a href="tel:+1123345678">+1123345678</a>
                    </dd>
                </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li>
                    <a href="{{ url('/about') }}">About</a>
                </li>
                <li>
                    <a href="#">Projects</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li>
                    <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                </li>
            </ul>
            </div>
        </div>
    </div>
</footer>

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
