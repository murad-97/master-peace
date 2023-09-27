@extends("layouts.master2")
@section("css")
<link rel="stylesheet" href="{{ asset("css/fullroom.css") }}" />
<link rel="stylesheet" href="{{ asset("css/profile.css") }}" />
@endsection
@section("content")
 
    <!--  -->
    <div class="row col-sm-12">
      <div class="left col-sm-4">
        <h2 class="name">Take your full room with 20% discount</h2>
      </div>
      <div class="right col-sm-8">
        <img class="discount" src="/image/discount.png" alt="" />
        <div class="deal-buttons mb-4" style="width: 60%">
            <div class="read_bt">
              <a href="/deal" >Take the deal</a>
            </div>
         <div class="read_bt" >
             <a href="/cart" >Choose your 
                 furniture</a>
         </div>
        </div> 
      </div>
      <img
        class="red"
        src="/image/jean-philippe-delberghe-m1MSf-FLO_E-unsplash.jpg"
        alt=""
        srcset="" />
    </div>
    <!--  -->
    @endsection
    @section("js")
    <script src="{{ asset("js/drag2.js") }}"></script>

    <script src="{{asset ("js/jquery.min.js") }}"></script>
    <script src="{{asset ("js/bootstrap.bundle.min.js") }}"></script>
    @endsection