<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Built Better</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    @yield('css')
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo mr-auto"><a href="index.html"><img src="/image/logo.png" ></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>


                    @if (Auth::check())
                        <div class="search_icon" style="width: 30%">
                            <ul class="navbar-nav " style="justify-content: center">
                                <li class="nav-item"> <a class="nav-link pl-0 pr-0"  href="{{ route('profile.edit', [Auth::user()]) }}">{{ Auth::user()->name }}</a>
                                </li>
                                <form method="POST"  action="{{ route('logout') }}">
                                    @csrf

                                    <li class="nav-item"> <a class="nav-link pl-0 pr-0"  href="route('logout')"
                                            onclick="event.preventDefault();this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a></li>
                                </form>
                            </ul>
                        </div>
                    @else
                        <div class="search_icon" style="width: 25%">
                            <ul class="navbar-nav mr-auto" style="justify-content: center">
                                <li class="nav-item"><a class="nav-link"  href="/login">Login</a></li>
                                <li class="nav-item"><a class="nav-link"  href="/register">Register</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
