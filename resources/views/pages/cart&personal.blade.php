@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="/css/cart&personal.css" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit&family=Space+Grotesk:wght@500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <section class=" row col-sm-12">
        <div class="left col-lg-6 col-md-12 col-sm-12">
            <h1 class="header">Order summary</h1>
            <div class="container col-sm-12">
                <div class="orders">
                    @php
                        $total = 0;
                    @endphp
                    @if (isset($products))
                        @foreach ($products as $product)
                            @php
                                $total += $product->price * $product->quantity;
                            @endphp
                            <div class="order">
                                <img src="/image/form room.jpg" alt="" />
                                <h4 class="name1">{{ $product->name }}</h4>
                                <h5 class="price">${{ $product->price * $product->quantity }}</h5>

                                <h5 class="price">Qty:{{ $product->quantity }}</h5>

                            </div>
                        @endforeach
                    @else
                        <h1>No products!</h1>
                    @endif

                </div>
                <div class="summary">
                    @if (isset($products->discount))
                        <div>
                            <h4 class="total">DISC:{{ $products->discount }}%</h3>

                                <h4 class="total">${{ ($total * $products->discount) / 100 }}</h3>
                        </div>
                    @endif
                    <div>
                   
                        <h4 class="total">DILIVARY</h3>
                            <h4 class="total">$40</h3>
                    </div>
                    <div>
                        <h1 class="total">TOTAL</h1>
                        @if (isset($products->discount))
                            <h1 class="total">${{ $total - ($total * $products->discount) / 100 - 40 }}</h1>
                        @else
                            <h1 class="total">${{ $total + 40 }}</h1>
                        @endif
                    </div>
                </div>
            </div>
            <button class="btn check">check out</button>
        </div>

        <div class="right col-lg-6 col-md-12 col-sm-12">
            {{-- <div class="card1 col-sm-12 display">
          <!-- <img src="/image/bg-card-front.png" alt="" class="frontshadow" /> -->
          <div class="card-pic">
            <div class="front">
              <img src="/image/bg-card-front.png" alt="" />
              <div class="info">
                <p id="frontnum">0000 0000 0000 0000</p>

                <div id="frontname">
                  <p>murad alshorman</p>
                  <p>00/00</p>
                </div>
              </div>
            </div>
            <!-- <img src="/image/bg-card-back.png" alt="" class="backshadow" /> -->
            <div class="back">
              <img src="/image/bg-card-back.png" alt="" />
              <p>CVC: 000</p>
            </div>
          </div>

          <form class="card-form form" action="submit">
            <p>CARD HOLDER NAME</p>
            <input
              type="text"
              placeholder="e.g.murad alshorman"
              class="name"
              required />
            <p>CARD NUMPER</p>
            <input
              type="text"
              placeholder="e.g.1234 5678 9012 3456"
              maxlength="14"
              class="name"
              required />
            <div class="vertical P">
              <p>EXP.DATE(MM/YY)</p>
              <div>
                <p>CVC</p>
              </div>
            </div>
            <div class="vertical">
              <input
                type="text"
                placeholder="yy"
                maxlength="2"
                class="date"
                required />
              <input
                type="text"
                placeholder="mm"
                maxlength="2"
                class="date"
                required />

              <input
                type="text"
                placeholder="E.G.123"
                maxlength="3"
                class="cvc"
                required />
            </div>
            <input type="submit" value="Confirm" class="btn" />
          </form>
        </div> --}}
            <!--  -->
            <form class="personal form" method="get" action="{{ route('checkOut') }}">
                @csrf
                <h1 style="font-size: 30px;font-weight:bold">Personal Information</h1>
                <p>FULL NAME</p>
                <input name="name" type="text" placeholder="e.g.murad alshorman" class="name"
                    value="{{ Auth::user()->name }}" />
                <span style="color:red">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span><br>
                <p>FULL ADDRESS</p>
                <input name="address" type="text" placeholder="Irbid/jordan" maxlength="14" class="name"
                @if (isset(Auth::user()->address))
                value="{{ Auth::user()->address->address }}"
            @endif />
                <span style="color:red">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span><br>

                <p>PHONE NUMBER</p>
                <input name="number" type="text" placeholder="962777777777"
                    value="{{ Auth::user()->number }}" class="name" />
                <span style="color:red">
                    @error('number')
                        {{ $message }}
                    @enderror
                </span><br>




                <input type="submit" value="Confirm" class="btn" />
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/cart&personal.js"></script>
@endsection
