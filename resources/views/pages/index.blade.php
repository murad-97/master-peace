@extends("layouts.master")
@section("content")


    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
       
        <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1 class="furniture_text"><img  src="../image/logo5.png" style="height: 110px; width: auto;"  alt=""></h1>
                        <p class="there_text">Interior design is not just about aesthetics; it's about shaping spaces
                            that enhance human experiences and interactions.</p>
                        <div class="contact_bt_main">
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="furniture_text"><img  src="../image/logo5.png" style="height: 110px; width: auto;"  alt=""></h1>
                        <p class="there_text">Your home should tell the story of who you are and be a collection of what
                            you love</p>
                        <div class="contact_bt_main">
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="furniture_text"><img  src="../image/logo5.png" style="height: 110px; width: auto;"  alt=""></h1>
                        <p class="there_text">The true essence of interior design is creating a living environment that
                            reflects the unique personality and style of its inhabitants.</p>
                        <div class="contact_bt_main">
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                    <i class=""><img src="/image/left-arrow.png"></i>
                </a>
                <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                    <i class=""><img src="/image/right-arrow.png"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- try your shape  -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_text"><img  src="../image/logo1.png" style="height: 100px; width: auto;"  alt=""></h1>
                    <p class="lorem_text">We tried to make your experience in this website more realistic. You can build
                        your own room with your own hands and make your own design with what you love</p>
                    <div class="read_bt1"><a href="#">Let's go</a></div>
                </div>
                <div class="col-md-6">
                    <div class="image_1"><img src="/image/img-1.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">our services</h1>
            <p class="many_taital">There are many variations of passages of Lorem Ipsum </p>
            <div class="services_section2 layout_padding">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon_1"><img src="/image/icon-1.png"></div>
                        <h2 class="furnitures_text">Design Services</h2>
                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the
                        </p>
                        <div class="read_bt_main">
                            <div class="read_bt"><a href="#">CONTACT US</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon_1"><img src="/image/icon-2.png"></div>
                        <h2 class="furnitures_text">Interactive Design</h2>
                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the
                        </p>
                        <div class="read_bt_main">
                            <div class="read_bt"><a href="{{ route("interactive") }}">TRY IT</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon_1"><img src="/image/icon-3.png"></div>
                        <h2 class="furnitures_text">Furniture Store</h2>
                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the
                        </p>
                        <div class="read_bt_main">
                            <div class="read_bt"><a href="{{ route("subcategories") }}">GO SHOPPING </a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- furniture -->
    <div class="furnitures_section layout_padding">
        <div class="container">
            <h1 class="our_text">Our products</h1>
            <p class="ipsum_text">
                Discover a symphony of creativity, from captivating paintings to handcrafted furniture and enchanting lighting,<br> each weaving a unique tale within your space.
                </p>
            <div class="furnitures_section2 layout_padding">
                <div class="row">
                    @foreach ($Categories as $category)
                        
                    
                    <div class="col-md-4 cards">
                        <div >
                            <div class="container_main">
                                <img src="/image/img-2.png" alt="Avatar" class="image">
                                <div class="overlay">
                                    <a href="{{ route('subcategories', ['id' => $category->id]) }}" class="icon" title="User Profile" style="font-size: 30px">
                                        <i  class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            <h3 class="temper_text">{{ $category->name }}</h3>
                            <p class="dololr_text">{{ $category->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- services section start -->
    
    <!-- services section end -->
    <!-- about section start -->

    <!-- about section end -->
    <!-- furnitures section start -->

    <!-- furnitures section end -->
    <!-- who section start -->

    <!-- who section end -->
    <!-- projects section start -->
    <div class="projects_section layout_padding">
        <div class="container">
            <h1 class="our_text">Our projects</h1>
            <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="projects_section2">
                            <div class="container_main2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-4.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-5.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-6.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="projects_section2">
                            <div class="container_main1">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-4.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-5.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-6.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="projects_section2">
                            <div class="container_main1">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-4.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-5.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="/image/img-6.png" alt="Avatar" class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <img src="/image/left-arrow.png"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <img src="/image/right-arrow.png"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- projects section end -->
    <!-- client section start -->
    <div class="clients_section layout_padding">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for ($i = 0; $i < count($reviews); $i += 2)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i/2 }}" class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @for ($i = 0; $i < count($reviews); $i += 2)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <h1 class="client_text">What Our Clients Say</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            <div class="clients_section2 layout_padding">
                                @for ($j = $i; $j < $i + 2 && $j < count($reviews); $j++)
                                    <div class="client_{{ $j - $i + 1 }}">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="image_7"><img src="/image/img-{{ $reviews[$j]->user->id }}.png"></div>
                                                <div class="quote_icon"><img src="/image/quote-icon.png"></div>
                                            </div>
                                            <div class="col-sm-9">
                                                <h1 class="loksans_text">{{ $reviews[$j]->user->name }}</h1>
                                                <p class="dolor_ipsum_text">{{ $reviews[$j]->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
    <!-- client section end -->
    <!-- contact section start -->

    <!-- contact section end -->
    <!-- footer section start -->
    