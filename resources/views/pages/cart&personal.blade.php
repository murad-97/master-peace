@extends("layouts.master")
    @section("css")
    <link rel="stylesheet" href="/css/cart&personal.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit&family=Space+Grotesk:wght@500&display=swap"
      rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
    @section("content")
    <section class=" row col-sm-12">
      <div class="left col-lg-6 col-md-12 col-sm-12">
        <h1 class="header">Order summary</h1>
        <div class="container col-sm-12">
          <div class="orders">
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <a><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
              
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <a><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <a><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <a><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <a><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <a><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
            <div class="order">
              <img src="/image/form room.jpg" alt="" />
              <h4 class="name1">white ksajdlsd</h4>
              <h5 class="price">$500</h5>

              <a><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="summary">
            <div>
              <h4 class="total">DISC:20%</h3>
              <h4 class="total">$200</h3>
            </div>
            <div>
              <h4 class="total">DILIVARY</h3>
              <h4 class="total">$40</h3>
            </div>
            <div>
              <h1 class="total">TOTAL</h1>
              <h1 class="total">$1700</h1>
            </div>
          </div>
        </div>
        <button class="btn check">check out</button>
      </div>

      <div class="right col-lg-6 col-md-12 col-sm-12">
        <div class="card1 col-sm-12">
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

          <form class="card-form" action="submit">
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
        </div>
        <!--  -->
        <form class="personal display" action="submit">
          <h1>Personal Information</h1>
          <p>FULL NAME</p>
          <input
            type="text"
            placeholder="e.g.murad alshorman"
            class="name"
            required />
          <p>FULL ADDRESS</p>
          <input
            type="text"
            placeholder="Irbid/jordan"
            maxlength="14"
            class="name"
            required />

          <p>PHONE NUMBER</p>
          <input
            type="text"
            placeholder="0777777777"
            maxlength="10"
            class="name"
            required />
          <p>NATIONAL ID</p>

          <input
            type="text"
            placeholder="0000000000"
            maxlength="10"
            class="name"
            required />

          <input type="submit" value="Confirm" class="btn" />
        </form>
        <div class="Completed display">
          <img src="/image/icon-complete.svg" alt="" />
          <h1>Thank you!</h1>
          <p>We've added your details</p>
          <button>Continue</button>
        </div>
      </div>
    </section>
    @endsection
    @section("js")
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/cart&personal.js"></script>
    @endsection

