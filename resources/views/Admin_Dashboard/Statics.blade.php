<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('https://getbootstrap.com/docs/5.3/assets/css/docs.css')}}" rel="stylesheet">
        <title></title>
        <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js')}}"></script>

        <style>
/* Reset some default browser styles */
body, h1 {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.flex-wrapper {
    display: flex;
    flex-flow: row nowrap;
}

.single-chart {
    width: 33%;
    justify-content: space-around;
}

.circular-chart {
    display: block;
    margin: 10px auto;
    max-width: 80%;
    max-height: 250px;
}

.circle-bg {
    fill: none;
    stroke: #eee;
    stroke-width: 3.8;
}

.circle {
    fill: none;
    stroke-width: 2.8;
    stroke-linecap: round;
    animation: progress 1s ease-out forwards;
}

@keyframes progress {
    0% {
        stroke-dasharray: 0 100;
    }
}

.circular-chart.orange .circle {
    stroke: #ff9f00;
}

.circular-chart.green .circle {
    stroke: #4CC790;
}

.circular-chart.blue .circle {
    stroke: #3c9ee5;
}

.percentage {
    fill: #666;
    font-family: sans-serif;
    font-size: 0.5em;
    text-anchor: middle;
}

/* Add more CSS styles as needed */

        
    </style>
</head>
<body>
    <aside class="main-sidebar  elevation-4" style="background-color:#59886b ; color:white">
        <!-- Brand Logo -->
        {{-- <a href="index3.html" class="brand-link">
        {{-- <a href="index3.html" class="brand-link">
          <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a> --}}
        
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ url('assets/img/WhatsApp Image 2023-07-04 at 10.15.24 PM.jpeg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="{{ url('/admin') }}" class="d-block" style="color:white">Anfal dherat</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open" >
                <a href="#" class="nav-link active" style="background-color:black">
    
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/dash') }}" class="nav-link active" style="background-color:black">
    
                      <h5 style="text-align:center">
                      home
                      </h5>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link">
                      <i class="far fa-circle nav-icon" style="color:white"></i>
                      <p style="color:white">Admins</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/user') }}" class="nav-link">
                      <i class="far fa-circle nav-icon" style="color:white"></i>
                      <p style="color:white">Users</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/category') }}" class="nav-link">
                      <i class="far fa-circle nav-icon" style="color:white"></i>
                      <p style="color:white">Categories</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ url('/donatione') }}" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:white"></i>
                  <p style="color:white">Donations</p>
                </a>
              </li>
    
    
          <li class="nav-item">
            <a href="{{ url('/donateditems') }}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color:white"></i>
              <p style="color:white">Donated Items</p>
            </a>
          </li>
    
      <li class="nav-item">
        <a href="{{ url('/donatedservives') }}" class="nav-link">
          <i class="far fa-circle nav-icon" style="color:white"></i>
          <p style="color:white">Donated Services</p>
        </a>
    
    </li>
    <li class="nav-item has-treeview menu-open">
    
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link active" style="background-color:black">
    
              <h5 style="text-align:center">Form
              </h5>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/donationform') }}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color:white"></i>
              <p style="color:white">Donation Form</p>
            </a>
          </li>
    
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ url('/donationitemform') }}" class="nav-link">
          <i class="far fa-circle nav-icon" style="color:white"></i>
          <p style="color:white">Donated Items Form</p>
        </a>
      </li>
    
    
    
    
    <li class="nav-item">
    <a href="{{ url('/donatedservicesform') }}" class="nav-link">
    <i class="far fa-circle nav-icon" style="color:white"></i>
    <p style="color:white">Donated Services form</p>
    </a>
    
    </li>
    </ul>
    </li>
    
    
    
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="/Admin_Home">Volunteers</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
                 <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Admin_Dashboard.Admins_Data')}}"> Admins</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Dashboard.Category')}}">Category</a>
              </li>
               {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Donations')}}">Donations</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Volunteers')}}">Volunteers</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Dashboard.User')}}">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Dashboard.Projects')}}">Projects</a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="{{route('admin_logout')}}">logout</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Link</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
    <div class="flex-wrapper  p-5">
        <div class="single-chart">
            <svg viewBox="0 0 36 36" class="circular-chart orange">
                <path class="circle-bg"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path id="percent1" class="circle"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text id="firstPercent" x="18" y="20.35" class="percentage">40</text>
            </svg>
        </div>

        <div class="single-chart">
            <svg viewBox="0 0 36 36" class="circular-chart green">
                <path class="circle-bg"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path id="percent2" class="circle"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text id="secPercent" x="18" y="20.35" class="percentage">20</text>
            </svg>
        </div>

        <div class="single-chart">
            <svg viewBox="0 0 36 36" class="circular-chart blue">
                <path class="circle-bg"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path id="percent3" class="circle"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text id="thirdPercent" x="18" y="20.35" class="percentage">18</text>
            </svg>
        </div>
    </div>
    <div style="display: flex; justify-content: space-around; width: 100%;">
        <h4>Number of Volunteers</h4>
        <h4>Number of Donations</h4>
        <h4>Donations of Users</h4>
    </div>
    <br />
    <br />
    <br />
    <br />

    <div style="display: flex; justify-content: space-evenly; width: 100%;">
        <div style="font-size: 25px">
            <span style="font-size: 55px; color: #FF9F29;">8</span>
            Donations
        </div>
        <div style="font-size: 25px">
            <span style="font-size: 55px; color: #FF9F29;">7</span>
            Beneficiary
        </div>
    </div>
    <script>
        // Assuming you have an array of percentage values
var percentageValues = [40, 20, 18];

// Loop through the percentage values and set the stroke-dasharray for each chart
for (var i = 0; i < percentageValues.length; i++) {
    var pathElement = document.getElementById("percent" + (i + 1));
    var percentageValue = percentageValues[i];

    // Calculate the stroke-dasharray value based on the percentage (e.g., from 0 to 100)
    var strokeDashValue = percentageValue;

    // Ensure the strokeDashValue doesn't exceed 100 or go below 0
    strokeDashValue = Math.max(0, Math.min(100, strokeDashValue));

    // Set the stroke-dasharray attribute of the path element
    pathElement.setAttribute("stroke-dasharray", strokeDashValue + " 100");
}

    </script>
</body>
</html>
