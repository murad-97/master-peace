@extends('layouts.adminMaster')


@section('content')
    <!-- Content Start -->
    <div class="content " >


        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4 ">
            <h1 class="text-warning" style="font-family: Georgia, 'Times New Roman', Times, serif"> CODEMATES </h1>
            <div class="row g-4 mt-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fas fa-hands-helping fa-3x text-success"></i>
                        <div class="ms-3">
                            <p class="mb-2">Orders</p>

                            <h6 class="mb-0">{{ $orders->count() }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fas fa-clipboard-list fa-3x text-success"></i>
                        <div class="ms-3">
                            <p class="mb-2">Products</p>

                            <h6 class="mb-0">{{ $products }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fas fa-user-friends fa-3x text-success"></i>
                        <div class="ms-3">
                            <p class="mb-2">Users</p>

                            <h6 class="mb-0">{{ $users}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fas fa-money-bill fa-3x text-success"></i>
                        <div class="ms-3">
                            <p class="mb-2">Payments</p>
                            @php
                            $total = 0

                            @endphp
                            @foreach ($orders as $order)
                            @php
                          $total += $order->payment->amount

                            @endphp

                            @endforeach
                            <h6 class="mb-0">{{ $total }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->

        {{-- <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Worldwide Sales</h6>
                            <a href="" class="text-warning" >Show All</a>
                        </div>
                        <img src="{{url('images/chart3.jpg')}}" style="width:90% ; height : 400px">
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Salse & Revenue</h6>
                            <a href="" class="text-warning">Show All</a>
                        </div>
                        <img src="{{url('images/excel.svg')}}" style="width:90% ; height :400px" >
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Recent Orders</h6>
                    <a href="" class="text-warning">Show All</a>
                </div>
           @if ($orders->count() >=1)
           <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">User Name</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Products Qty</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->payment->amount }}</td>
                        <td>{{ $order->total }}</td>
                    </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
@else
<h1>No orders Yet !</h1>
           @endif
            </div>
        </div>
        <!-- Recent Sales End -->


    </div>
    <!-- Content End -->
@endsection
