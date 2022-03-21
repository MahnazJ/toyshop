<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col header p-3">
                    <header class="text-center">
                        <h1><p class="header-text"><a id="headerlink" href="{{ url('/') }}">{{ config('app.name', 'ToyShop') }}</a></p></h1>
                    </header>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light bg-light m-10">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="/logo_small_icon_only.png" alt="" width="90" height="100"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                                <li class=" nav-item"><a class="nav-link active nav-button" aria-current="page" href="{{ route('home') }}">Home</a></li>
                                <li class="nav-item dropdown"><a class="nav-link nav-button dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item button-style text-style" href="{{ route('products') }}">Products</a></li>
                                <li><a class="dropdown-item button-style text-style" href="#">Sale</a></li>
                            </ul>
                            <ul>
                                <li class="nav-item"><a class="nav-link nav-button" href="{{ route('contact') }}">Contact</a></li>
                                <li class="nav-item"><a class="nav-link nav-button" href="{{ route('about') }}">About Us</a></li>
                        
                            </ul>

                                {{-- <li class="nav-item dropdown"><a class="nav-link nav-button dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> --}}
                            
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    <ul>
                        <cart /> 
                    </u>

                </div>
                
            </div>
         
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <hr> 
    <footer id="footerimage" class="nb-footer">
    <div class="container">
    <div class="row bg-transparent text-dark">
    
    
    <div class="col-md-3 col-sm-6 mt-4">
    <div class="footer-info-single">
    <h2 class="title footer-font-weight">Help Center</h2>
    <ul class="list-unstyled">
        <li><a href="#"></i> Test</a></li>
        <li><a href="#"></i> FAQ's</a></li>
        <li><a href="#"></i> About Us</a></li>
        <li><a href="#"></i> About Us</a></li>
    
    </ul>
    </div>
    </div>
    
    <div class="col-md-3 col-sm-6 mt-4">
    <div class="footer-info-single">
    <h2 class="title footer-font-weight">Customer information</h2>
    <ul class="list-unstyled">
        <li><a href="#"></i> About Us</a></li>
        <li><a href="#"></i> FAQ's</a></li>
        <li><a href="#"></i> Sustainability</a></li>
        <li><a href="#"></i> Contact Us</a></li>
    
    </ul>
    </div>
    </div>
    
    <div class="col-md-3 col-sm-6 mt-4">
    <div class="footer-info-single">
    <h2 class="title footer-font-weight">Security & privacy</h2>
    <ul class="list-unstyled">
        <li><a href="#"></i> Terms Of Use</a></li>
        <li><a href="#"></i> Privacy Policy</a></li>
        <li><a href="#"></i> Test</a></li>
    </ul>
    </div>
    </div>
    
    <div class="col-md-3 col-sm-6 mt-4">
    <div class="footer-info-single">
        <ul class="list-inline text-center">
        <h2 class="title footer-font-weight">Let's connect!</h2>
        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
    
        </div>
        </ul>
    </div>
    
    
    
        <div class="container">
            <div class="row">
            <div class="col">
            <p class="text-center">Copyright © 2022. ToyShop B.V.</p>
            </div>
            </div>
            </div>
            </div>
    
    </footer>



</body>
</html>
