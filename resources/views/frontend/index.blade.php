@include("custom.header")
<section class="home-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><a href="{{ route('search.doctor') }}"><img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner1.jpg" alt="First slide"></a>  </div>
                        <div class="carousel-item"><a href="https://amardoctor.com.bd/public/index.php/contact/service/nursing"> <img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner2.jpg" alt="Second slide"></a> </div>
                        <div class="carousel-item"><a href="{{ route('search.doctor') }}"> <img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner3.jpg" alt="Third slide"> </a></div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<!-- Start Offers 1 -->
<section class="offers1">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2 class="u-font--24 u-margin--0 u-font--bold ">Top deals and offers</h2>
                <div class="u-font--16 u-margin--5__top">Hand-picked deals for a healthier you</div>
            </div>
        </div>

    </div>
</section>
<!--muhin product slider start-->
<style>

</style>
<section class="pt-5 circle-1">
    <div class="container pb-5 position-relative">
        <div id="demo" class="carousel slide position-relative" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active carousel-item-left">
                    <div class="d-flex">
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Basic%20Check%20UP%20Package%20for%20Male%20%20or%20Female%20(Adult).jpg">
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Cancer%20screening%20package%20for%20Female.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Cancer%20screening%20package%20for%20Male.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Cardiac%20Check-up%20Package%20-%201.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-item-next carousel-item-left">
                    <div class="d-flex">
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Cardiac%20Check-up%20Package%20-%202.jpg">
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Child%20Health%20Check-up%20Package.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Comprehensive%20Health%20check-up%20package%20for%20Female.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Executive%20Health%20check-up%20package%20for%20Female.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="d-flex">
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Executive%20Health%20check-up%20package%20for%20Male.jpg">
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Liver%20%20Check-up%20package-1.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Liver%20%20Check-up%20package-2.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Pre-Employment%20Health%20Check-up%20Package.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <div class="d-flex">
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Pre-Marital%20%20Check-up%20Package.jpg">
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Primary%20Diabetic%20Check-up%20Package.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Renal%20or%20Kidney%20Check-up%20Package.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Smoker%20Health%20Check-up%20Package.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex">
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Standard%20Diabetic%20Check-up%20Package.jpg">
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Thyroid%20Check-up%20Package.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Comprehensive%20Health%20check-up%20package%20for%20Male.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/top-deals/Smoker%20Health%20Check-up%20Package.jpg">
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev" style="opacity: 1; left: -10%;">
                <i class="fas fa-chevron-left" style="color:#5969f6; font-size:30px;"></i>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next" style="opacity: 1; transform: rotate(-180deg); right: -10%;">
                <i class="fas fa-chevron-left" style="color:#5969f6; font-size:30px;"></i>
            </a>
        </div>
    </div>

</section>
<!--muhin product slider end-->
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
                            <a href="{{route('productSee', $product->product_slug)}}">
                            <span class="LazyLoad is-visible">
                                  <img src="{{ asset('storage') }}/{{$product->thumbnail_medium}}" alt="" class="img-fluid">
                            </span>
                            </a>
                        </div>
                        <br>
                        <h6><a href="{{route('productSee', $product->product_slug)}}">{{ $product->product_name }}</a></h6>
                        <span>{!! Str::limit($product ->description, 100,  ' .....') !!}</span>
                        <div class="u-border__top--blue_4 u-margin--10__top"></div>
                        <div class="u-margin--15__top u-t-c--green_2 u-font--bold"><i class="icon-ic_discount"></i>

                        </div> <a class="btn btn-info" href="{{route('productSee', $product->product_slug)}}">Explore</a>
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
            <div class="col-md-4 col-xs-12">
                <a href="{{ route('allProduct') }}"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/checkup.jpg"> </a>
                <br>
                <br>
                <span>Ideal for male aged 21 to 40 years</span> </div>
            <div class="col-md-4 col-xs-12">
                <a href="{{ route('search.doctor') }}"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/doctor.jpg"> </a>
                <br>
                <br>
                <span>Ideal for male aged 21 to 40 years</span> </div>

            <div class="col-md-4 col-xs-12">
                <a href="{{ route('contact.form') }}"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/medicine.JPG"> </a>
                <br>
                <br>
                <span>Ideal for male aged 21 to 40 years</span> </div>
        </div>
    </div>
</section>
<!-- End Services1 -->
<br>
<br>
<!-- Start Testimonials -->
<div class="col-lg-10 offset-lg-1 pt-5 pb-5 text-light" style="background-color:#15558d;">
    <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left"></i> Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.
                    </p>
                    <footer class="blockquote-footer" style="color:#d2d2d2;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                    <!-- Client review stars -->
                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                    <p class="client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </p>
                </blockquote>
            </div>
            <div class="carousel-item text-center p-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left"></i> Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.
                    </p>
                    <footer class="blockquote-footer" style="color:#d2d2d2;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                    <!-- Client review stars -->
                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                    <p class="client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                </blockquote>
            </div>
            <div class="carousel-item text-center p-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left"></i> A person who never made a mistake never tried anything new.
                    </p>
                    <footer class="blockquote-footer" style="color:#d2d2d2;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                    <!-- Client review stars -->
                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                    <p class="client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                </blockquote>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
            <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
        </ol>
    </div>
</div>
<!-- End Testimonials -->
<br>
<br> @include('custom.footer')