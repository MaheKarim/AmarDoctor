@include('custom.header')


<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Change Password</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                <!-- Profile Sidebar -->
               @include('backend.multi-dashboard.doctor._sidebar_doctor')
                <!-- /Profile Sidebar -->

            </div>
            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">

                                <div class="card-body">
                                    <!-- Modal -->
                                                       <!-- Notification Start Here -->
                                                       @if (session()->has('success'))
                                                       <div class="alert alert-success">
                                                           {{ session()->get('success') }}
                                                       </div>
                                                          @endif

                                                      @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                  <ul>
                                                    @foreach ($errors->all() as $error)
                                                 <li>{{ $error }}</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                                <br/>
                                            @endif


                                <!-- Change Password Form -->
                                <form method="POST" action=" {{ route('doctor.changePasswordDoctorForm') }} ">
                                    @csrf
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" name="password" name="current-password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" nam="new-password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="new-password_confirmation" required>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                    </div>
                                </form>
                                <!-- /Change Password Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@include('custom.footer')
