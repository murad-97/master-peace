
    @extends("layouts.master")
    @section("css")
    <link rel="stylesheet" href="{{asset ("css/drag2.css") }}" />
    @endsection
    @section("content")
     
    <!-- header section start -->
   
    <div class="hello row">
      <div class="room"></div>
      <div>
        <nav class="container listt">
          <menu>
            <menuitem>
              <a>Painting</a>
              <menu>
                <menuitem><a>Flat</a></menuitem>
                <menuitem><a>Matte</a></menuitem>
                <menuitem><a>Eggshell</a></menuitem>
                <menuitem><a>Satin</a></menuitem>
              </menu>
            </menuitem>
            <menuitem>
              <a>lightning</a>
              <menu>
                <menuitem><a>Modern</a></menuitem>
                <menuitem><a>Classic</a></menuitem>
                <menuitem><a>Comfort</a></menuitem>
                <menuitem><a>Luxury</a></menuitem>
              </menu>
            </menuitem>
            <menuitem>
              <a>Furniture</a>
              <menu>
                <menuitem><a>Modern</a></menuitem>
                <menuitem><a>Classic</a></menuitem>
                <menuitem><a>Comfort</a></menuitem>
                <menuitem><a>Luxury</a></menuitem>
              </menu>
            </menuitem>
          </menu>
        </nav>
        <div class=" container details">
          <h1>details</h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea eum
            dolor molestias nisi dolores similique reiciendis, inventore saepe
            odit ipsam mollitia officia commodi quam in, possimus voluptas
            cupiditate laborum. Placeat?
          </p>
        </div>
      </div>
      
      <div class="row" style="width: 90%; margin: 0 auto">
        <main style="margin: 0">
          <div class="container bg-trasparent p-3" style="position: relative">
            <div
              class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4">
              <div class="col">
                <div class="lightning card h-60 shadow-sm">
                  <img
                    src="../image/chandelier1.png"
                    class="card-img-top"
                    alt="..." />
                  <div class="card-body">
                    <div class="clearfix">
                      <span class="float-end price-hp">12354.00&euro;</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="lightning card h-60 shadow-sm">
                  <img
                    src="../image/chandelier2.png"
                    class="card-img-top"
                    alt="..." />
                  <div class="card-body">
                    <div class="clearfix">
                      <span class="float-end price-hp">12354.00&euro;</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="furniture card h-60 shadow-sm">
                  <img
                    src="../image/pngwing.com (1).png"
                    class="card-img-top"
                    alt="..." />
                  <div class="card-body">
                    <div class="clearfix">
                      <span class="float-end price-hp">12354.00&euro;</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class=" furniture card h-60 shadow-sm">
                  <img
                    src="../image/kanabai.png"
                    class="card-img-top"
                    alt="..." />
                  <div class="card-body">
                    <div class="clearfix">
                      <span class="float-end price-hp">12354.00&euro;</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="furniture card h-60 shadow-sm">
                  <img
                    src="../image/tree1.png"
                    class="card-img-top"
                    alt="..." />
                  <div class="card-body">
                    <div class="clearfix">
                      <span class="float-end price-hp">12354.00&euro;</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="painting card h-60 shadow-sm">
                  <img
                    src="../image/rough-plaster-wall.jpg"
                    class="card-img-top"
                    alt="..." />
                  <div class="card-body">
                    <div class="clearfix">
                      <span class="float-end price-hp">12354.00&euro;</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="painting card h-60 shadow-sm">
                  <img
                    src="../image/blue-painted-wall-texture-background.jpg"
                    class="card-img-top"
                    alt="..." />
                  <div class="card-body">
                    <div class="clearfix">
                      <span class="float-end price-hp">12354.00&euro;</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>


    <!--  footer section end -->
    <!-- copyright section start -->

    <!-- Javascript files-->

    @endsection
    @section("js")
    <script src="{{ asset("js/drag2.js") }}"></script>

    <script src="{{asset ("js/jquery.min.js") }}"></script>
    <script src="{{asset ("js/bootstrap.bundle.min.js") }}"></script>
    @endsection

