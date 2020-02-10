<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Hireo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('/')}}search/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}search/css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper-with-transparent-header">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth transparent-header">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->


                    <!-- Main Navigation -->

                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->

                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->



    <!-- Intro Banner
    ================================================== -->
    <div class="intro-banner dark-overlay" data-background-image="{{asset('/')}}search/images/home-background-02.jpg">

        <!-- Transparent Header Spacer -->
        <div class="transparent-header-spacer"></div>

        <div class="container">

            <!-- Intro Headline -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-headline">
                        <h3>
                            <strong>Hire experts Doctors for any job, any time.</strong>
                            <br>
                            <span>Huge community  for your Health.</span>
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <form action="{{ route('search.doctorProfile') }}" method="get">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-banner-search-form margin-top-95">

                            <!-- Search Field -->


                            <!-- Search Field -->
                            <div class="intro-search-field">
                                <select class="selectpicker default" title="Select Any Category" name="category">
                                    @php($categories = \App\Category::all())
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Search Field -->
                            <div class="intro-search-field">
                                <select class="selectpicker default"  name="area" title="All Area" >
                                    @php($areas = \App\Area::all())
                                    @foreach($areas as $area)
                                        <option value="{{$area->id}}">{{$area->area_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Button -->
                            <div class="intro-search-button">
                                <button type="submit" class="button ripple-effect">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Stats -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                            <strong class="counter">1,586</strong>
                            <span>Doctor</span>
                        </li>
                        <li>
                            <strong class="counter">3,543</strong>
                            <span>Patient</span>
                        </li>
                        <li>
                            <strong class="counter">1,232</strong>
                            <span>Nurse</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>



</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{asset('/')}}search/js/jquery-3.4.1.min.js"></script>

<script src="{{asset('/')}}search/js/mmenu.min.js"></script>
<script src="{{asset('/')}}search/js/counterup.min.js"></script>
<script src="{{asset('/')}}search/js/tippy.all.min.js"></script>
<script src="{{asset('/')}}search/js/bootstrap-slider.min.js"></script>
<script src="{{asset('/')}}search/js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>


</body>

</html>
