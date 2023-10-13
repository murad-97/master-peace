<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
   
    <!-- Favicon -->
    <link href="{{ url('img/favicon.ico') }}" rel="icon">
   <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css') }}">
    
    {{-- <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com%22%3E/')}}">
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com/')}}" >
    <link href="{{url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap')}}" rel="stylesheet">
     --}}
    {{-- <!-- Icon Font Stylesheet -->
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">
     --}}
    <!-- Libraries Stylesheet -->
    <link href="{{ url('lib/owlcarousel/urls/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="{{ url('css/styleadmain.css') }}" rel="stylesheet">

    <script src="{{url('https://kit.fontawesome.com/d6692547f6.js')}}"></script>
</head>
 
<body>

    <!-- Navbar Start -->
      <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0 " >
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-success mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0 text-warning">
            <i class="fa fa-bars"></i>  Nutrizen
        </a>
       
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2 text-warning"></i>
                    <span class="d-none d-lg-inline-flex text-success">Message</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all message</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2 text-warning"></i>
                    <span class="d-none d-lg-inline-flex text-success">Notificatin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Profile updated</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">New user added</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Password changed</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all notifications</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-success" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="{{url('images/team/Sereen.jpg')}}" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">ADMIN</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    {{-- <a href="{{route('profile')}}" class="dropdown-item">My Profile</a> --}}
                    
                    <a href="{{route('admin_logout')}}" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

       

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3 bg-light" style="border-right:2px" >
            <nav class="navbar " style="background-color: rgba(117, 192, 157, 0)">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 >CODEMATES</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{url('images/team/Sereen.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('Admin_Dashboard.index') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.index') ? 'active' : '' }}">
                        <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                    <a href="{{ route('Admin_Dashboard.Admins_Data') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.Admins_Data') ? 'active' : '' }}">
                        <i class="fa fa-laptop me-2"></i>Admins
                    </a>
                    <a href="{{ route('Admin_Dashboard.User') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.User') ? 'active' : '' }}">
                        <i class="fa fa-th me-2"></i>Users
                    </a>
                    <a href="{{ route('Admin_Dashboard.Projects') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.Projects') ? 'active' : '' }}">
                        <i class="fa fa-keyboard me-2"></i>Product
                    </a>
                    <a href="{{ route('Admin_Dashboard.Projects') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.Projects') ? 'active' : '' }}">
                        <i class="fa fa-keyboard me-2"></i>Categoreis
                    </a>
                    <a href="{{ route('Admin_Dashboard.Volunteers') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.Volunteers') ? 'active' : '' }}">
                        <i class="fa fa-table me-2"></i>P
                    </a>
                    <a href="{{ route('Admin_Dashboard.Vaccept') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.Vaccept') ? 'active' : '' }}">
                        <i class="far fa-file-alt me-2"></i>Accepted Volanteers
                    </a>
                    <a href="{{ route('Admin_Dashboard.Payments') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.Payments') ? 'active' : '' }}">
                        <i class="fa fa-chart-bar me-2"></i>Payment
                    </a>
   
                    <a href="{{ route('Admin_Dashboard.ressourses') }}" class="nav-item nav-link {{ request()->routeIs('Admin_Dashboard.ressourses') ? 'active' : '' }}">
                        <i class="far fa-file-alt me-2"></i>Ressources
                    </a>
                  
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
      