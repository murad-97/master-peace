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

            <input type="text" />
            <div class="search_icon">
              <ul>
                <li>
                  <a href="#"><img src="/image/search-icon.png" /></a>
                </li>
                <li><a href="#">LOGIN</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>