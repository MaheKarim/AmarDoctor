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
                    <div class="">
                        <a href="#">
                            <span class="LazyLoad is-visible">
                                  <img src="{{ asset('storage') }}/{{$product->package_image}}" alt="" class="img-fluid" width="360px" height="239px">
                            </span>
                        </a>
                    </div>
                    <br>
                    <h6><a href="#">{{ $product->product_name }}</a></h6>
                    <span>{!! Str::limit($product ->description, 100,  ' .....') !!}</span>
                    <div class="u-border__top--blue_4 u-margin--10__top"></div>
                    <div class="u-margin--15__top u-t-c--green_2 u-font--bold"><i class="icon-ic_discount"></i>
                        <div class="u-d__inline ">24% off</div>
                    </div> <a class="btn btn-dark-green" href="#">Explore</a>
                </div>
            </div>
            @endforeach

        </div>
                {{ $products->links() }}
    </div>
</section>
<!-- End sell products -->
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

    <!-- End Testimonials -->
    <br>
    <br>



@include('custom.footer')
