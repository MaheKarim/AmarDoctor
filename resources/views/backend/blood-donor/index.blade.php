@include('custom.header')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Your search result here</h2>
            </div>
            <div class="col-md-4 col-12 d-md-block d-none">

            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                <!-- Search Filter -->

                <!-- /Search Filter -->

            </div>

            <div class="col-md-12 col-lg-8 col-xl-9">
                <!-- Doctor Widget -->
                @foreach($donors as $donor)
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="doctor-profile.php">
                                            <div class="profile-img">
                                                @if($donor->profile_image == "default.png")
                                                    <img src="{{ asset('/') }}default/default.png" alt="User Image" style="width: 150px; max-width: 100%">
                                                @endif
                                            </div>

                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="#">{{ $donor->name }}</a></h4>
                                        <p class="doc-speciality">{{$donor->phn_number}}</p>
                                        <h5 class="doc-department"><img src="{{ asset('/') }}frontend/assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">{{ trans('blood.blood_group.'.$donor->blood_group)}}</h5>

                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i>  Donate Blood:  {{ trans('boolean.status.'.$donor->status ) }} </li>
                                            <li><i class="fas fa-map-marker-alt"></i> {{$donor->address}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->
@include('custom.footer')
