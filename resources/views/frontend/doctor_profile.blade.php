 @include('custom.header')
<!--
 * Created by PhpStorm.
 * User: Mahe
 * Date: 10-Feb-20
 * Time: 11:50 AM

-->

@yield('content')

 <!-- Breadcrumb -->
 <div class="breadcrumb-bar">
     <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-12 col-12">
                 <nav aria-label="breadcrumb" class="page-breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
                     </ol>
                 </nav>
                 <h2 class="breadcrumb-title">Doctor {{ $user->name }} Profile</h2>
             </div>
         </div>
     </div>
 </div>
 <!-- /Breadcrumb -->
 <!-- Page Content -->
 <div class="content">
     <div class="container">

         <!-- Doctor Widget -->
         <div class="card">
             <div class="card-body">
                 <div class="doctor-widget">
                     <div class="doc-info-left">
                         <div class="doctor-img">
                             @if ($user->profile_image == "default.png")
                                 <img src="{{ asset('/') }}default/default.png" alt="User Image" style="width: 150px; max-width: 100%">
                                 @else
                                 <img src="{{ asset('storage') }}/{{ $user->profile_image }}" class="img-fluid" alt="User Image">
                             @endif
                         </div>
                         <div class="doc-info-cont">
                             <h4 class="doc-name">{{ $user->name }}</h4>
                             <p class="doc-speciality">{{ $user->Doctor->edu_degree }}</p>
                             <p class="doc-department"><img src="{{ asset('/') }}frontend/assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">{{ $user->Doctor->Category->category_name }}</p>

                             <div class="clinic-details">
                                 <p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{ $user->Doctor->Area->area_name }} - <a href="javascript:void(0);">Get Directions</a></p>

                             </div>
                             {{--<div class="clinic-services">--}}
                                 {{--<span>Dental Fillings</span>--}}
                                 {{--<span>Teeth Whitneing</span>--}}
                             {{--</div>--}}
                         </div>
                     </div>
                     <div class="doc-info-right">
                         <div class="clini-infos">
                             <ul>
                                 <li><i class="far fa-thumbs-up"></i> {{ $user->Doctor->work_exp }} Year Of Experience</li>
                                 <li><i class="fas fa-map-marker-alt"></i> {{ $user->Doctor->Area->area_name }}</li>
                                 <li><i class="far fa-money-bill-alt"></i> {{ $user->Doctor->doctor_fees }} <i class="fas fa-info-circle" data-toggle="tooltip" title="Visiting Fees May Update!"></i> </li>
                             </ul>
                         </div>
                         @auth
                         <div class="clinic-booking">
                             <a class="apt-btn" href="{{ route('booking.confirmation' , $user->id) }}">Book For Appointment</a>
                         </div>
                         @endauth
                     </div>
                 </div>
             </div>
         </div>
         <!-- /Doctor Widget -->

         <!-- Doctor Details Tab -->
         <div class="card">
             <div class="card-body pt-0">

                 <!-- Tab Menu -->
                 <nav class="user-tabs mb-4">
                     <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                         <li class="nav-item">
                             <a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
                         </li>

                     </ul>
                 </nav>
                 <!-- /Tab Menu -->

                 <!-- Tab Content -->
                 <div class="tab-content pt-0">

                     <!-- Overview Content -->
                     <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                         <div class="row">
                             <div class="col-md-12 col-lg-9">

                                 <!-- About Details -->
                                 <div class="widget about-widget">
                                     <h4 class="widget-title">About Me</h4>
                                     <p> {{ $user->Doctor->about_me }}</p>
                                 </div>
                                 <!-- /About Details -->

                                 <!-- Education Details -->
                                 {{--<div class="widget education-widget">--}}
                                     {{--<h4 class="widget-title">Education</h4>--}}
                                     {{--<div class="experience-box">--}}
                                         {{--<ul class="experience-list">--}}
                                             {{--<li>--}}
                                                 {{--<div class="experience-user">--}}
                                                     {{--<div class="before-circle"></div>--}}
                                                 {{--</div>--}}
                                                 {{--<div class="experience-content">--}}
                                                     {{--<div class="timeline-content">--}}
                                                         {{--<a href="#/" class="name">American Dental Medical University</a>--}}
                                                         {{--<div>BDS</div>--}}
                                                         {{--<span class="time">1998 - 2003</span>--}}
                                                     {{--</div>--}}
                                                 {{--</div>--}}
                                             {{--</li>--}}
                                             {{--<li>--}}
                                                 {{--<div class="experience-user">--}}
                                                     {{--<div class="before-circle"></div>--}}
                                                 {{--</div>--}}
                                                 {{--<div class="experience-content">--}}
                                                     {{--<div class="timeline-content">--}}
                                                         {{--<a href="#/" class="name">American Dental Medical University</a>--}}
                                                         {{--<div>MDS</div>--}}
                                                         {{--<span class="time">2003 - 2005</span>--}}
                                                     {{--</div>--}}
                                                 {{--</div>--}}
                                             {{--</li>--}}
                                         {{--</ul>--}}
                                     {{--</div>--}}
                                 {{--</div>--}}
                                 <!-- /Education Details -->

                                 <!-- Experience Details -->
                                 {{--<div class="widget experience-widget">--}}
                                     {{--<h4 class="widget-title">Work & Experience</h4>--}}
                                     {{--<div class="experience-box">--}}
                                         {{--<ul class="experience-list">--}}
                                             {{--<li>--}}
                                                 {{--<div class="experience-user">--}}
                                                     {{--<div class="before-circle"></div>--}}
                                                 {{--</div>--}}
                                                 {{--<div class="experience-content">--}}
                                                     {{--<div class="timeline-content">--}}
                                                         {{--<a href="#/" class="name">Glowing Smiles Family Dental Clinic</a>--}}
                                                         {{--<span class="time">2010 - Present (5 years)</span>--}}
                                                     {{--</div>--}}
                                                 {{--</div>--}}
                                             {{--</li>--}}
                                             {{--<li>--}}
                                                 {{--<div class="experience-user">--}}
                                                     {{--<div class="before-circle"></div>--}}
                                                 {{--</div>--}}
                                                 {{--<div class="experience-content">--}}
                                                     {{--<div class="timeline-content">--}}
                                                         {{--<a href="#/" class="name">Comfort Care Dental Clinic</a>--}}
                                                         {{--<span class="time">2007 - 2010 (3 years)</span>--}}
                                                     {{--</div>--}}
                                                 {{--</div>--}}
                                             {{--</li>--}}
                                             {{--<li>--}}
                                                 {{--<div class="experience-user">--}}
                                                     {{--<div class="before-circle"></div>--}}
                                                 {{--</div>--}}
                                                 {{--<div class="experience-content">--}}
                                                     {{--<div class="timeline-content">--}}
                                                         {{--<a href="#/" class="name">Dream Smile Dental Practice</a>--}}
                                                         {{--<span class="time">2005 - 2007 (2 years)</span>--}}
                                                     {{--</div>--}}
                                                 {{--</div>--}}
                                             {{--</li>--}}
                                         {{--</ul>--}}
                                     {{--</div>--}}
                                 {{--</div>--}}
                                 <!-- /Experience Details -->

                                 <!-- Awards Details -->
                                 <div class="widget awards-widget">
                                     <h4 class="widget-title">Address</h4>
                                     <div class="experience-box">
                                         <ul class="experience-list">
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">

                                                         <h4 class="exp-title">{{ $user->Doctor->present_address }}</h4>

                                                     </div>
                                                 </div>
                                             </li>

                                         </ul>
                                     </div>
                                 </div>
                                 <div class="widget awards-widget">
                                     <h4 class="widget-title">Experience</h4>
                                     <div class="experience-box">
                                         <ul class="experience-list">
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">

                                                         <h4 class="exp-title">{{ $user->Doctor->work_exp }} Year Of Experience</h4>

                                                     </div>
                                                 </div>
                                             </li>

                                         </ul>
                                     </div>
                                 </div>
                                 <!-- /Awards Details -->

                                 <!-- Services List -->
                                 {{--<div class="service-list">--}}
                                     {{--<h4>Services</h4>--}}
                                     {{--<ul class="clearfix">--}}
                                         {{--<li>Tooth cleaning </li>--}}
                                         {{--<li>Root Canal Therapy</li>--}}
                                         {{--<li>Implants</li>--}}
                                         {{--<li>Composite Bonding</li>--}}
                                         {{--<li>Fissure Sealants</li>--}}
                                         {{--<li>Surgical Extractions</li>--}}
                                     {{--</ul>--}}
                                 {{--</div>--}}
                                 <!-- /Services List -->

                                 <!-- Specializations List -->
                                 {{--<div class="service-list">--}}
                                     {{--<h4>Specializations</h4>--}}
                                     {{--<ul class="clearfix">--}}
                                         {{--<li>Children Care</li>--}}
                                         {{--<li>Dental Care</li>--}}
                                         {{--<li>Oral and Maxillofacial Surgery </li>--}}
                                         {{--<li>Orthodontist</li>--}}
                                         {{--<li>Periodontist</li>--}}
                                         {{--<li>Prosthodontics</li>--}}
                                     {{--</ul>--}}
                                 {{--</div>--}}
                                 <!-- /Specializations List -->

                             </div>
                         </div>
                     </div>
                     <!-- /Overview Content -->
                    <!-- Cut File Will Add Here -->

                 </div>
             </div>
         </div>
         <!-- /Doctor Details Tab -->

     </div>
 </div>
 <!-- /Page Content -->

 @include('custom.footer')