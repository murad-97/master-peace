@extends('layouts.adminMaster')

@section('content')

<div class="content " >

<div style="margin: 0% 8% ">
<div style="width: 100%">
<br><br>



    <div class="container">
        <div class="card">
                        <div class="card-body">
                            @if ($products->img)
                            <img src="{{ asset( $products->img) }}" alt="{{ $products->name }}"
                                width="200">
                        @endif                           <br><br> <h3 class="card-title"> {{ $products->name }}</h3>
                            <div class="mb-3"> <br>
                              <h5>Brief:</h5>
                                <p class="card-text">{{ $products->shortDescription}}</p>
                            </div>
                            <div class="mb-3">
                              <h5>Description:</h5>
                                <p class="card-text">{{ $products->longDescription }}</p>
                            </div>
                            <div class="mb-3">
                                <h5>Cart Des:</h5>
                                <p class="card-text">{{ $products->cartDescription }}</p>
                            </div>
                            <div class="mb-3">
                              <h5>cla:</h5>
                                <p class="card-text">{{ $products->cla }}</p>
                            </div>
                            {{-- <div class="mb-3">
                               <h5>Location:</h5>
                                <p class="card-text">{{ $products->location }}</p>
                            </div> --}}
                            <div class="mb-3">
                               <h5>Price:</h5>
                                <p class="card-text">{{ $products->price }}</p>
                            </div>
                            <div class="mb-3">
                               <h5>Prot:</h5>
                                <p class="card-text">{{ $products->prot }}</p>
                            </div>
                            <!-- Add other product details as needed -->
                        </div>
                    </div>
                </div>

                <!-- Add other product details as needed -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
