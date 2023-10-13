@extends('layouts.adminMaster')

@section('content')
<div class="content " >
<div style="margin: 0% 6% ">
    <div style="width: 100%" > 
<br><br>
        <h1 class="mx-auto"> Manage Your Project </h1>  <a href="Project_Create"><button class="btn btn-success" type="submit" style="position:absolute ; right :5%"> + Add Project</button>
        </a> <br><br>
      
        <table class="display" id="myTable">
          <thead style="background-color: rgba(117, 192, 157, 0.489) ">
             <tr>
                        <th>Name</th>
                        <th>Breif</th>
                        <th>Description</th>
                        <th>cart des</th>
                        <th>cla</th>
                        <th>prot</th>
                        <th>price</th>
                        {{-- <th>Total</th> --}}
                        <th>Image</th>
                        <th style="text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="custom-element">
                        {{-- <td>{{ $product['id'] }}</td> --}}
                        <td>{{ $product['name'] }}</td>
                        {{-- <td>{{ $product['breif'] }}</td> --}}
                        <td>
                          {!! Illuminate\Support\Str::limit($product['shortDescription'], 20) !!}
                          @if (str_word_count($product['shortDescription']) > 20)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                        <td>
                          {!! Illuminate\Support\Str::limit($product['longDescription'], 20) !!}
                          @if (str_word_count($product['longDescription']) > 20)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                      <td>
                        {!! Illuminate\Support\Str::limit($product['cartDescription'], 20) !!}
                        @if (str_word_count($product['cartDescription']) > 20)
                            <a href="{{ url()->current() . '?page=more' }}"></a>
                        @endif
                    </td>
                        {{-- <td>{{ $product['description3'] }}</td> --}}
                        {{-- <td>{{ $product['price'] }}</td> --}}
                        <td>{{ $product['cla'] }}</td>
                        <td>{{ $product['prot'] }}</td>
                        {{-- <td>{{ $product['period'] }}</td> --}}
                        <td>
                          {!! Illuminate\Support\Str::limit($product['price'], 10) !!}
                          @if (str_word_count($product['price']) > 10)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif










                          
                      </td>
                        {{-- <td>{{ $product['total'] }}</td> --}}
                        <td>
                          {{-- <img src="{{ $product->image }}" class="card-img" style="width: 100px" alt="{{ $product->name }}"> --}}
                          
                          <div >
                            @if ($product->img)
                                <img src="{{ asset($product->img) }}" alt="{{ $product->name }}"
                                    width="80" height="80">
                                <img src="{{ asset($product->img1) }}" alt="{{ $product->name }}"
                                    width="80" height="80">
                                <img src="{{ asset($product->img2) }}" alt="{{ $product->name }}"
                                    width="80" height="80">
                                <img src="{{ asset($product->img3) }}" alt="{{ $product->name }}"
                                    width="80" height="80">
                            @endif
                        </div>
                        </td>  
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <form action="productdelete/{{$product['id'] }}" method="POST" style="margin-bottom: 2px">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn fa fa-trash text-danger fa-lg show_confirm"  type="submit" value="DELETE" ></button>
                                    </form >                   
                                </div>
                                
                                <div class="col-md-4">
                                    <form action="productedit/{{ $product['id'] }}" method="" style="margin-bottom: 2px">
                                        @csrf
                                        <button class="btn fa-regular fa-pen-to-square text-warning fa-lg" type="submit" value="Update" ></button>
                                    </form>  
                                </div>
                                
                                <div class="col-md-4">
                                    <form action="productview/{{ $product['id'] }}" method="" style="margin-bottom: 2px">
                                        @csrf
                                        <button class="btn  far fa-eye text-primary fa-lg" type="submit" value="Update" ></button>
                                    </form> 
                                </div>
                            </div>
                                            
                            
                     
                  


                    </td>
                     @endforeach   
                </tbody>
            </table>
        </div>
        </div>
        </div>
 @endsection

 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        var deleteButtons = document.querySelectorAll('.show_confirm');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                var form = button.closest("form");

                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then(function (willDelete) {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
