@include('custom.header')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">product /</a></li>

                    </ol>
                </nav>
                <h5 style="color:#fff;">{{ $product->product_name }}</h5>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

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
                    <div class="col-md-8 col-9"><h6>Total Rate</h6></div>
                    <div class="col-md-4 col-3"><h6 style="font-weight:bold;">&#2547; {{ $product->total_rate }}</h6></div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-8 col-9"><h6>Package Rate</h6></div>
                    <div class="col-md-4 col-3"><h6 style="font-weight:bold;">&#2547; {{ $product->package_rate }}</h6></div>
                </div>
                <hr>
                <div class="btn-search">
                    <button type="button" class="btn btn-block" data-toggle="modal" >+880{{ $product->phn_number }}</button>
                </div>
                <!-- Modal Start Here -->

                <!-- Button trigger modal -->


                <!-- Modal -->


                <!-- Modal Off Here -->
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h4>Who should book this checkup?</h4>
                <p>{!! $product->description !!}</p>
            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->
@include('custom.footer')