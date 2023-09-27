@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/drag2.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <!-- header section start -->

    <div class="hello row">
         

        <div class="room"></div>
        <div>
            {{-- <nav class="container listt">
                <menu>
                    <menuitem id="demo1">
                    <a>drop</a>
                    <menu>
                        <menuitem><a>about</a></menuitem>
                        <menuitem><a>help</a></menuitem>

                    </menu>
                    </menuitem>
                </menu>
            </nav> --}}
            <nav class="container listt">
              
                <menu>
                    @foreach ($Categories as $category)
                        <menuitem>
                        <a>{{ $category->name }}</a>
                        <menu>
                            @foreach ($category->styles as $style)
                                <menuitem><a href="interactive/{{ $style->id }}">{{ $style->name }}</a></menuitem>
                            @endforeach
                        </menu>
                        </menuitem>
                    @endforeach
                </menu>
            </nav>
            <div class=" container details">
                <h1>details</h1>
                <p class="description">
                </p>
            </div>
        </div>

        <div class="row" style="width: 90%; margin: 0 auto">
            <main style="margin: 0">
                <div class="container bg-trasparent p-3" style="position: relative">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4">
                        @foreach ($Categories as $category)
                            @php $count = 0; @endphp
                            @foreach ($category->products as $product)
                              @if ($style)
                              <div class="col">
                                <div class="{{ $category->name }} card h-60 shadow-sm"
                                    height="{{ $product->height }}" description="{{ $product->longDescription }}" value ="{{ $product->id }}">
                                    <img src="../image/chandelier1.png" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <span class="float-end price-hp">{{ $product->price }}&euro;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              @else
                              @if ($count < 2)
                              <div class="col">
                                  <div class="{{ $category->name }} card h-60 shadow-sm"
                                      height="{{ $product->height }}" description="{{ $product->longDescription }}" value ="{{ $product->id }}">
                                      <img src="../image/chandelier1.png" class="card-img-top" alt="..." />
                                      <div class="card-body">
                                          <div class="clearfix">
                                              <span class="float-end price-hp">{{ $product->price }}&euro;</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              @php $count++; @endphp
                          @endif
                              @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </main>
        </div>
        <div>
        </div>
    </div>
    
        <div style="display: flex;justify-content:flex-end">
            <div class="read_bt m-4 " style="width:25%" ><a href="/fullroom">DONE</a></div>
        </div>
    </div>


    <!--  footer section end -->
    <!-- copyright section start -->

    <!-- Javascript files-->
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="{{ asset('js/drag2.js') }}"></script>
  
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endsection
