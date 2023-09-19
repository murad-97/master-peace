@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection
@section('content')
    <!-- header section start -->
    <section class="About">
        <h1>About Company</h1>
        <div class="up">
            <div class="contant">
                <h3>DREAM 2 Reallity</h3>
                <p>Aenean sed adipiscing diam donec
                    adipiscing tristique risus. At imperdiet
                    dui accumsan sit amet nulla facilisi morbi tempus. Id semper risus in
                    hendrerit gravida rutrum. Vel congue quisque egestas diam
                    pharetra vel turpis nunc eget lorem. Egestas
                </p>
                <a href="http://" target="_blank" rel="noopener noreferrer"><button>contact us </button></a>
            </div>
        </div>
        <div class="image_up">
            <img src="/image/bbg-1.jpg" alt="">
        </div>

        <div class="image_dowen">
            <img src="/image/bbg.jpg" alt="">
        </div>
        <h2>About Me</h2>
        <div class="dowen">
            <div class="contant">
                <h1><span>MURAD ALSHORMAN</span></h1>
                <p><span>ARCHITECT</span> <br>
                    Sit amet massa vitae tortor condimentum lacinia quis.
                    Ornare arcu dui vivamus arcu felis bibendum ut Consectetur adipiscing elit duis tristique sollicitudin.
                    Volutpat lacus laoreet non curabitur. Magna fringilla urna porttitor rhoncus.
                    Ultricies leo integer malesuada nunc vel risus commodo viverra.
                    Ipsum a arcu cursus vitae congue,
                    Imperdiet dui accumsan sit amet nulla facilisi</p>
                <a href="http://" target="_blank" rel="noopener noreferrer"><button>contact me </button></a>
            </div>
        </div>
    </section>

@endsection
<!--  footer section end -->
<!-- copyright section start -->

<!-- Javascript files-->
@section('js')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
@endsection
