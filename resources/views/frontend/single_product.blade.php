@include('custom.header')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Booking</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Test</li>
                    </ol>
                </nav>
                <h5 style="color:#fff;">Comprehensive Young Indian Health Checkup</h5>
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
                <h3>Comprehensive Young Indian Health Checkup</h3>
                <p>Ideal for individuals aged <span style="font-weight:bold;">21-40 years</span>
                    Includes <span style="font-weight:bold;">106 tests</span></p>
                <h4>What preparation is needed for this Checkup?
                </h4>
                <p>Fasting is required for about 10 - 12 hours before the sample collection. Consumption of water is permitted.</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <h3>Selected Package</h3>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-9"><h6>Comprehensive Young Indian Health Checkup</h6></div>
                    <div class="col-md-4 col-3"><h6 style="font-weight:bold;">&#2547; 3900</h6></div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-8 col-9"><h6>TOTAL</h6></div>
                    <div class="col-md-4 col-3"><h6 style="font-weight:bold;">&#2547; 3900</h6></div>
                </div>
                <hr>
                <div class="btn-search">
                    <button type="button" class="btn btn-block">Book Now</button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h4>Who should book this checkup?</h4>
                <p>Lifestyle disorders like diabetes, high blood pressure, heart problems are emerging as a major health concern amongst the young Indians. One in every ten Indian is overweight or obese, with increases the risk of developing these problems at very young age. The Comprehensive Young Indian Health Checkup screens more than 10 body systems, for the early detection of health issues including<span style="font-weight:bold;">hormonal imbalances, high diabetes, blood pressure and heart problems, kidney and liver dysfunction, vitamin deficiencies, anemia, arthritis, toxicities in blood and poor immunity</span></p>
            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->
@include('custom.footer')
