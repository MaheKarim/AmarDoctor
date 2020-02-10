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
                 <h2 class="breadcrumb-title">Doctor Profile</h2>
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
                             <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid" alt="User Image">
                         </div>
                         <div class="doc-info-cont">
                             <h4 class="doc-name">Dr. Darren Elder</h4>
                             <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                             <p class="doc-department"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">Dentist</p>
                             <div class="rating">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star"></i>
                                 <span class="d-inline-block average-rating">(35)</span>
                             </div>
                             <div class="clinic-details">
                                 <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA - <a href="javascript:void(0);">Get Directions</a></p>
                                 <ul class="clinic-gallery">
                                     <li>
                                         <a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
                                             <img src="assets/img/features/feature-01.jpg" alt="Feature">
                                         </a>
                                     </li>
                                     <li>
                                         <a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
                                             <img  src="assets/img/features/feature-02.jpg" alt="Feature Image">
                                         </a>
                                     </li>
                                     <li>
                                         <a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
                                             <img src="assets/img/features/feature-03.jpg" alt="Feature">
                                         </a>
                                     </li>
                                     <li>
                                         <a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
                                             <img src="assets/img/features/feature-04.jpg" alt="Feature">
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="clinic-services">
                                 <span>Dental Fillings</span>
                                 <span>Teeth Whitneing</span>
                             </div>
                         </div>
                     </div>
                     <div class="doc-info-right">
                         <div class="clini-infos">
                             <ul>
                                 <li><i class="far fa-thumbs-up"></i> 99%</li>
                                 <li><i class="far fa-comment"></i> 35 Feedback</li>
                                 <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                 <li><i class="far fa-money-bill-alt"></i> $100 per hour </li>
                             </ul>
                         </div>
                         <div class="doctor-action">
                             <a href="javascript:void(0)" class="btn btn-white fav-btn">
                                 <i class="far fa-bookmark"></i>
                             </a>
                             <a href="chat.php" class="btn btn-white msg-btn">
                                 <i class="far fa-comment-alt"></i>
                             </a>
                             <a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#voice_call">
                                 <i class="fas fa-phone"></i>
                             </a>
                             <a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#video_call">
                                 <i class="fas fa-video"></i>
                             </a>
                         </div>
                         <div class="clinic-booking">
                             <a class="apt-btn" href="booking.php">Book Appointment</a>
                         </div>
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
                         {{--<li class="nav-item">--}}
                             {{--<a class="nav-link" href="#doc_locations" data-toggle="tab">Locations</a>--}}
                         {{--</li>--}}
                         {{--<li class="nav-item">--}}
                             {{--<a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>--}}
                         {{--</li>--}}
                         {{--<li class="nav-item">--}}
                             {{--<a class="nav-link" href="#doc_business_hours" data-toggle="tab">Business Hours</a>--}}
                         {{--</li>--}}
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
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 </div>
                                 <!-- /About Details -->

                                 <!-- Education Details -->
                                 <div class="widget education-widget">
                                     <h4 class="widget-title">Education</h4>
                                     <div class="experience-box">
                                         <ul class="experience-list">
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <a href="#/" class="name">American Dental Medical University</a>
                                                         <div>BDS</div>
                                                         <span class="time">1998 - 2003</span>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <a href="#/" class="name">American Dental Medical University</a>
                                                         <div>MDS</div>
                                                         <span class="time">2003 - 2005</span>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                                 <!-- /Education Details -->

                                 <!-- Experience Details -->
                                 <div class="widget experience-widget">
                                     <h4 class="widget-title">Work & Experience</h4>
                                     <div class="experience-box">
                                         <ul class="experience-list">
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <a href="#/" class="name">Glowing Smiles Family Dental Clinic</a>
                                                         <span class="time">2010 - Present (5 years)</span>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <a href="#/" class="name">Comfort Care Dental Clinic</a>
                                                         <span class="time">2007 - 2010 (3 years)</span>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <a href="#/" class="name">Dream Smile Dental Practice</a>
                                                         <span class="time">2005 - 2007 (2 years)</span>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                                 <!-- /Experience Details -->

                                 <!-- Awards Details -->
                                 <div class="widget awards-widget">
                                     <h4 class="widget-title">Awards</h4>
                                     <div class="experience-box">
                                         <ul class="experience-list">
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <p class="exp-year">July 2019</p>
                                                         <h4 class="exp-title">Humanitarian Award</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <p class="exp-year">March 2011</p>
                                                         <h4 class="exp-title">Certificate for International Volunteer Service</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="experience-user">
                                                     <div class="before-circle"></div>
                                                 </div>
                                                 <div class="experience-content">
                                                     <div class="timeline-content">
                                                         <p class="exp-year">May 2008</p>
                                                         <h4 class="exp-title">The Dental Professional of The Year Award</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                                 <!-- /Awards Details -->

                                 <!-- Services List -->
                                 <div class="service-list">
                                     <h4>Services</h4>
                                     <ul class="clearfix">
                                         <li>Tooth cleaning </li>
                                         <li>Root Canal Therapy</li>
                                         <li>Implants</li>
                                         <li>Composite Bonding</li>
                                         <li>Fissure Sealants</li>
                                         <li>Surgical Extractions</li>
                                     </ul>
                                 </div>
                                 <!-- /Services List -->

                                 <!-- Specializations List -->
                                 <div class="service-list">
                                     <h4>Specializations</h4>
                                     <ul class="clearfix">
                                         <li>Children Care</li>
                                         <li>Dental Care</li>
                                         <li>Oral and Maxillofacial Surgery </li>
                                         <li>Orthodontist</li>
                                         <li>Periodontist</li>
                                         <li>Prosthodontics</li>
                                     </ul>
                                 </div>
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