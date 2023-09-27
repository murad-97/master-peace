@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/orders.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')
<header id="site-header">
  <div class="container">
    <h1><span></span> <em><a href="" target="_blank"></a></em> <span class="last-span is-open"></span></h1>
  </div>
</header>

<div class="container">

  <section id="cart"> 
    @php
    $total = 0;
  @endphp
  @foreach ($products as $product)
   
    @php
    $total += $product->price *$product->quantity;
  @endphp
      
      <article class="product" data-product-id="{{ $product->id }}">
      <header>
        <a class="remove" >
          <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/1.jpg" alt="">

          <h3>Remove product</h3>
        </a>
      </header>

      <div class="content">

        <h1>{{ $product->name }}</h1>

       {{$product->cartDescription}}

      </div>

      <footer class="content">
        <span class="qt-minus">-</span>
        <span class="qt">{{ $product->quantity }}</span>
        <span class="qt-plus">+</span>

        <h2 class="full-price">
          {{$product->quantity*$product->price }}$
        </h2>

        <h2 class="price">
         {{ $product->price}}$
        </h2>
      </footer>
    </article>
    @endforeach


  </section>

</div>

<footer id="site-footer">
  <div class="container clearfix">

    <div class="left">
      <h2 class="subtotal">Subtotal: <span>{{ $total }}</span>$</h2>
      <h3 class="tax">Taxes (5%): <span>{{ $total *5/100 }}</span>$</h3>
      <h3 class="shipping">Shipping: <span>40</span>$</h3>
    </div>

    <div class="right">
      <h1 class="total">Total: <span>{{ $total + ($total *5/100) +40 }}</span>$</h1>
      <a href="/deal" class="btn">Checkout</a>
    </div>

  </div>
</footer>
@endsection
@section('js')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/orders.js') }}"></script>
@endsection