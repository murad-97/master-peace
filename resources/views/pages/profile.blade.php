@extends("layouts.master2")
@section("css")
{{-- <link rel="stylesheet" href="{{ asset("css/fullroom.css") }}" /> --}}
<link rel="stylesheet" href="{{ asset("css/profile.css") }}" />
@endsection
@section("content")
    <!--  -->
    <section class="row col-sm-12">
      <div class="left col-sm-4">
        <img class="profile" src="/image/form room.jpg" alt="" />
        <h2 class="name">murad alshorman</h2>
        <div class="buttons">
          <button>Upload new picture</button>
        </div>
      </div>
      <div class="right col-sm-8">
        <button class="pro">info</button>
        <button class="pro">payment & order</button>
        <hr class="hr" />
        <div class="section profile-sec">
          <div class="hi col-sm-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">Murad alshorman</div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    muradalshorman136@gmail.com
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">+962778310048</div>
                </div>
                <hr />

                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">Irbid /jordan</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <a
                  class="btn btn-info"
                  target="__blank"
                  href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills"
                  >Edit</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="section orders">
          <div class="order-container">
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <span class="status1">shipped</span>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <span class="status1">shipped</span>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <span class="status1">shipped</span>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <span class="status1">shipped</span>
            </div>
          </div>
          <div class="pages">
            <span class="number">1</span>
            <span class="number">2</span>
            <span class="number">3</span>
          </div>
        </div>
      </div>
    </section>
    <!--  -->
    @endsection
    @section("js")
    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <script src="{{ asset("/js/profile.js") }}"></script>
    @endsection
