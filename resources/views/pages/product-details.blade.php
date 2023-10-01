@extends('layouts.master')
@section('css')
    {{-- <link rel="stylesheet" href={{ asset("assets/vendors/bootstrap/bootstrap.min.css") }} /> --}}
    <link rel="stylesheet" href={{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/animate/animate.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/fontawesome/css/all.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/jarallax/jarallax.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/organik-icon/organik-icons.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/nouislider/nouislider.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/nouislider/nouislider.pips.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/odometer/odometer.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/swiper/swiper.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/organik.css') }} />
@endsection
@section('content')
    <section class="product_detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product_detail_image">
                        <img src="{{ asset('assets/images/products/product-d-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product_detail_content">
                        <h2>{{ $product->name }}</h2>
                        <div class="product_detail_review_box">
                            <div class="product_detail_price_box">
                                <p>${{ $product->price }}</p>
                            </div>
                            <div class="product_detail_review">
                                @for ($i = 1; $i <= 5; $i++)
                                    <a href="#">
                                        @if ($i <= $averageRating)
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        @else
                                            <a href="#" class="deactive"><i class="fa fa-star"></i></a>
                                        @endif
                                    </a>
                                @endfor
                                <span>{{ count($productRatings) }} Customer Reviews</span>
                            </div>
                        </div>
                        <div class="product_detail_text">
                            <p>{{ $product->shortDescription }}</p>
                        </div>

                        <div class="product-quantity-box">
                            <div class="quantity-box">
                                <button type="button" class="sub">-</button>
                                <input type="number" id="2" value="1" />
                                <button type="button" class="add">+</button>
                            </div>
                            <div class="addto-cart-box">
                                <button class="thm-btn" type="submit">Add to Cart</button>
                            </div>

                        </div>
                        <ul class="list-unstyled category_tag_list">
                            <li><span>Category:</span>{{ $product->category->name }}</li>
                            <li><span>style:</span>{{ $product->style->name }}</li>
                        </ul>
                        <div class="product_detail_share_box">
                            <div class="share_box_title">
                                <h2>Share with friends</h2>
                            </div>
                            <div class="share_box_social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-tab-box tabs-box">
                        <ul class="tab-btns tab-buttons clearfix list-unstyled">
                            <li data-tab="#desc" class="tab-btn"><span>description</span></li>
                            <li data-tab="#addi__info" class="tab-btn"><span>Additional info</span></li>
                            <li data-tab="#review" class="tab-btn active-btn"><span>reviews</span></li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tab" id="desc">
                                <div class="product-details-content">
                                    <div class="desc-content-box">
                                        <p> {{ $product->longDescription }} </p>

                                    </div>
                                </div>
                            </div>

                            <div class="tab" id="addi__info">
                                <ul class="additionali_nfo list-unstyled">
                                    <li><span>height:</span>{{ $product->height }}cm</li>
                                    <li><span>Category:</span>{{ $product->category->name }}</li>
                                    <li><span>style:</span>{{ $product->style->name }}</li>
                                </ul>
                            </div>

                            <div class="tab active-tab" id="review">
                                <div class="reviews-box">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="product_reviews_box">
                                                    <h3 class="product_reviews_title"> {{ count($productRatings) }}  Product reviews</h3>
                                                    @foreach ($product->review as $review)
                                                    <div class="product_reviews_single">
                                                        <div class="product_reviews_image">
                                                            <img src={{ asset('assets/images/products/review-1.jpg') }}
                                                                alt="">
                                                        </div>
                                                        <div class="product_reviews_content">
                                                            <h3>{{ $review->user->name }}<span>{{ $review->created_at }}</span>
                                                            </h3>
                                                            <p style="width: 58vw">{{ $review->description }}</p>
                                                            <div class="product_reviews_rating product_detail_review">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <a href="#">
                                                                        @if ($i <= $review->review)
                                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                                        @else
                                                                            <a href="#" class="deactive"><i
                                                                                    class="fa fa-star"></i></a>
                                                                        @endif
                                                                    </a>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        </div>
                                        {{-- /// --}}


                                    </div>
                                    @if (Auth::check())
                                        <div class="col-xl-12">
                                            <div class="add_review_box">
                                                <h3 class="add_review_title">Add a review</h3>
                                                <div class="add_review_rating">
                                                    <span>Rate this Product?</span>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#" class="deactive"><i class="fa fa-star"></i></a>
                                                </div>
                                                <form class="add_review_form" method="POST"
                                                    action="{{ route('review') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-box">
                                                                <textarea name="description" placeholder="Write review" required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <input type="text" value="{{ Auth::user()->name }}"
                                                                    name="name" placeholder="Full name"
                                                                    required="">
                                                            </div>
                                                        </div>
                                                        {{--  --}}
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <input type="text" name="review"
                                                                    placeholder="Full name" required>
                                                            </div>
                                                        </div>
                                                        {{--  --}}
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <input value="{{ Auth::user()->email }}" type="email"
                                                                    name="email" placeholder="Email address" required>
                                                                <input value="{{ $product->id }}" type="text"
                                                                    name="product" placeholder="Email address" hidden>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="review_submit_btn">
                                                                <input value="Submit Review" type="submit"
                                                                    class="thm-btn">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="product-two">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__decor"></div><!-- /.block-title__decor -->
                <p>Recently Added</p>
                <h3>Similar Products</h3>
            </div><!-- /.block-title -->
            <div class="thm-tiny__slider" id="product-two__carousel"
                data-tiny-options='{
            "container": "#product-two__carousel",
            "items": 1,
            "slideBy": "page",
            "gutter": 0,
            "mouseDrag": true,
            "autoplay": true,
            "nav": false,
            "controlsPosition": "bottom",
            "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
            "autoplayButtonOutput": false,
            "responsive": {
                "640": {
                  "items": 2,
                  "gutter": 30
                },
                "992": {
                  "gutter": 30,
                  "items": 3
                },
                "1200": {
                  "disable": true
                }
              }
        }'>
                <div>
                    <div class="product-card__two">
                        <div class="product-card__two-image">
                            <span class="product-card__two-sale">sale</span>
                            <img src="assets/images/products/product-2-1.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Banana</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$1.00</p>

                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
                <div>
                    <div class="product-card__two">
                        <div class="product-card__two-image">
                            <img src="assets/images/products/product-2-2.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html"></a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$7.00</p>

                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
                <div>
                    <div class="product-card__two">
                        <div class="product-card__two-image">
                            <img src="assets/images/products/product-2-3.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Eggs</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$3.00</p>

                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.product-two -->
@endsection
@section('js')
    <script src={{ asset('assets/vendors/jquery/jquery-3.5.1.min.js') }}></script>
    <script src={{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}></script>
    <script src={{ asset('assets/vendors/jarallax/jarallax.min.js') }}></script>
    <script src={{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}></script>
    <script src={{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}></script>
    <script src={{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}></script>
    <script src={{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}></script>
    <script src={{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}></script>
    <script src={{ asset('assets/vendors/nouislider/nouislider.min.js') }}></script>
    <script src={{ asset('assets/vendors/odometer/odometer.min.js') }}></script>
    <script src={{ asset('assets/vendors/swiper/swiper.min.js') }}></script>
    <script src={{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}></script>
    <script src={{ asset('assets/vendors/wnumb/wNumb.min.js') }}></script>
    <script src={{ asset('assets/vendors/wow/wow.js') }}></script>
    <script src={{ asset('assets/vendors/isotope/isotope.js') }}></script>
    <script src={{ asset('assets/vendors/countdown/countdown.min.js') }}></script>

    <script src={{ asset('assets/js/organik.js') }}></script>
@endsection
