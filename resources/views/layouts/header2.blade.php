<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/index.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="stylesheet" href="/css/profile.css" />
    @yield("css")
    <title>Document</title>
  </head>
  <body>
    <div class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo">
            <a href="index.html"><img src="/image/logo.png" /></a>
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
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