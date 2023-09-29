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
            
            <div class="Completed ">
              <img src="/image/icon-complete.svg" alt="" />
              <h1>Thank you!</h1>
              <h2>We've added your details</h2>
              <h4>chooze your payment method</h4>
              <br>
              <form style="width:100%" action="{{ route('stripe') }}" method="post">
                @csrf
               
                <button type="submit"><i class="fa fa-paypal" aria-hidden="true"></i> paypal</button>
                </form>
              
              <br>
              <form style="width:100%" action="{{ route('stripe') }}" method="post">
                @csrf
               
                <button type="submit"><i class="fa fa-cc-stripe" aria-hidden="true"></i> Stripe</button>
                </form>
            </div>
          </div>
        
    </section>
@endsection
@section('js')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/cart&personal.js"></script>
@endsection
