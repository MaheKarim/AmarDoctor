@include("custom.header")
    <section class="home-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner1.jpg" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner2.jpg" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner3.jpg" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-- Start Offers 1 -->
    <section class="offers1">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2 class="u-font--24 u-margin--0 u-font--bold ">Top deals and offers</h2>
                    <div class="u-font--16 u-margin--5__top">Hand-picked deals for a healthier you</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <a href="#"><img class="img-fluid" src="{{asset('/')}}frontend/assets/img/offer1.jpg"></a>
                </div>
                <div class="col-sm">
                    <a href="#"><img class="img-fluid" src="{{asset('/')}}frontend/assets/img/offer2.webp"></a>
                </div>
                <div class="col-sm">
                    <a href="#"><img class="img-fluid" src="{{asset('/')}}frontend/assets/img/offer3.webp"></a>
                </div>
                <div class="col-sm">
                    <a href="#"><img class="img-fluid" src="{{asset('/')}}frontend/assets/img/offer4.webp"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offers 1 -->
    <br>
    <br>
    <!-- Start sell products -->
    <section class="sell-products">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2 class="u-font--24 u-margin--0 u-font--bold ">Affordable full body health checkups</h2>
                    <div class="u-font--16 u-margin--5__top">Free home sample collection for all health checkups</div>
                </div>
            </div>
            <br>
            <div class="row">
              @foreach($products as $product)
                <div class="col-sm">
                    <div class="text-center muhin">
                        <div class="image_checkup">
                            <a href="#">
                              <span class="LazyLoad is-visible">
                <img src="{{asset('/')}}frontend/assets/img/pro3.jpg" alt="" class="img-fluid">
                              </span>
                            </a>
                        </div>
                        <br>
                        <h6><a href="#">{{ $product->product_name }}</a></h6>
                        <span>Ideal for male aged 21 to 40 years</span>
                        <div class="u-border__top--blue_4 u-margin--10__top"></div>
                        <div class="u-margin--15__top u-t-c--green_2 u-font--bold"><i class="icon-ic_discount"></i>
                            <div class="u-d__inline ">24% off</div>
                        </div> <a class="btn btn-dark-green" href="#">Explore</a> </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- End sell products -->
    <br>
    <br>
    <!-- Start Services1 -->
    <section class="services1">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2 class="u-font--24 u-margin--0 u-font--bold ">3 steps for better health</h2> </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <a href="#"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/checkup.jpg"> </a>
                    <br>
                    <br>
                    <h4><a href="#">Comprehensive Young Indian Health Checkup</a></h4> <span>Ideal for male aged 21 to 40 years</span> </div>
                <div class="col-md-6 col-xs-12">
                    <a href="#"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/doctoor.jpg"> </a>
                    <br>
                    <br>
                    <h4><a href="#">Comprehensive Young Indian Health Checkup</a></h4> <span>Ideal for male aged 21 to 40 years</span> </div>
            </div>
        </div>
    </section>
    <!-- End Services1 -->
    <br>
    <br>
    <!-- Start Testimonials -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-center m-auto text-center">
                    <h2>Testimonials</h2>
                    <br>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                          @foreach($reviews as $review)
                            <div class="col-md-12">
                              <div class="img-box">
                                <a href="#">
                                  <img src="{{asset('storage')}}/{{$review->reviewer_image}}" alt="{{$review->reviewer_name}}" title="{{$review->reviewer_name}}" class="card-img-top">
                                  <p class="testimonial">
                                    {!! str_limit($review->reviewer_review, 150) !!} </p>
                                  <p class="overview">
                                    <b>{{$review->reviewer_name}}</b>,
                                    {{ $review->reviewer_designation }}
                                  </p>
                                </a>
                              </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->
    <br>
    <br>



@include('custom.footer')
