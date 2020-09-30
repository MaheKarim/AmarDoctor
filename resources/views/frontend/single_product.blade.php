@include('custom.header')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home  / <a href="{{ route('allProduct') }}"> Product /</a> </a></li>
                    </ol>
                </nav>
                <h5 style="color:#fff;">{{ $product->product_name }}</h5>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<br>
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <img style="width:100%;margin-bottom: 1%;" src="{{ asset('storage') }}/{{$product->package_image}}">
            </div>
            <div class="col-md-4 col-xs-12">
                <h3>{{ $product->product_name }}</h3>

            </div>
            <div class="col-md-4 col-xs-12">
                <h3>Selected Package</h3>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-9"><strike><h4>Regular Price</h4></strike></div>
                    <div class="col-md-4 col-3"><strike><h4 style="font-weight:bold;">&#2547; {{ $product->total_rate }}</h4></strike></div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-8 col-9"><h3>Discount Price</h3></div>
                    <div class="col-md-4 col-3"><h3 style="font-weight:bold;">&#2547; {{ $product->package_rate }}</h3></div>
                </div>
                <hr>

                <hr>
                @auth
                <div class="btn-search">
                    <a href="{{ route('productBooking', $product->id) }}" class="btn btn-block"> Book Now </a>
                </div>
                @endauth
                @if (!Auth::check())

                <span style="background-color: aqua">To book this package, You have to login!</span>

            @endif

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h3>Why should book this checkup?</h3>
                <p>{!! $product->description !!}</p>
            </div>
        </div>

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>

        <br> <br>
    </div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f74245424995474"></script>

</div>
<!-- /Page Content -->
@include('custom.footer')
