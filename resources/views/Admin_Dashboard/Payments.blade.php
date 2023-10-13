@extends('layouts.adminMaster')

@section('content')

<div class="content " >
    <div style="margin: 0% 8%">
      <div style="width: 100%" > 
    <br><br>
            <h1 class="mx-auto"> Payment </h1>
            <br>
            <table class="display" id="myTable">
                <thead style="background-color: rgba(117, 192, 157, 0.489)">
                    <tr>
                        <th>Payment ID</th>
                        <th>User id</th>
                        <th> Amount</th>
                        <th> provider</th>
                        <th>Payment status</th>
                        <th>payment-method</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($payment as $paypal)
                        <tr>
                            <td>{{ $paypal['id'] }}</td>
                            <td>{{ $paypal['userId'] }}</td>
                            <td>{{ $paypal['amount'] }}</td>
                            <td>{{ $paypal['provider'] }}</td>
                            <td>{{ $paypal['status'] }}</td>
                            <td>{{ $paypal['payment-method'] }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection