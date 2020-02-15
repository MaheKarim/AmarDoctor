@include('custom.header')
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Account Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                        <img src="{{ asset('/') }}frontend/assets/img/login-banner.png" class="img-fluid" alt="Login Banner">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Doctor Register <a href="register.php">Not a Doctor?</a></h3>
                            </div>

                            <!-- Register Form -->
                            <form action="{{ route('doctorSignUpFormSubmit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="text" name="name" class="form-control floating">
                                    <label class="focus-label">Name</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="username" class="form-control floating">
                                    <label class="focus-label">User Name</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="email" class="form-control floating">
                                    <label class="focus-label">E-mail Address</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="phn_number" class="form-control floating">
                                    <label class="focus-label">Mobile Number</label>
                                </div>
                                <!-- Area start -->
                                <div class="form-group form-focus">
                                    <label class="focus-label">Select Your Area</label>
                                    <select name="area_name_id" class="form-control select">
                                        @php($areas= \App\Area::all())
                                        @foreach ($areas as $area)
                                            <option {{ $area->id }}>{{$area->area_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Area END -->
                                <div class="form-group form-focus">
                                    <input type="password" name="password" class="form-control floating">
                                    <label class="focus-label">Create Password</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="bmdc_reg_no" class="form-control floating">
                                    <label class="focus-label">BMDC Registration Number</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="file" name="bmdc_cer" class="form-control floating">
                                    <label class="focus-label">BMDC Certificate</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="file" name="nid_pic" class="form-control floating">
                                    <label class="focus-label">NID Card</label>
                                </div>
                                <!-- Area start -->
{{--                                <div class="form-group form-focus">--}}
{{--                                    <label>Select Your Area</label>--}}
{{--                                    <select name="area_name_id" class="form-control select">--}}
{{--                                        @php($areas= \App\Area::all())--}}
{{--                                        @foreach ($areas as $area)--}}
{{--                                            <option {{ $area->id }}>{{$area->area_name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <!-- Area END -->
                                <div class="text-right">
                                    <a class="forgot-link" href="{{route('login')}}">Already have an account?</a>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                            </form>
                            <!-- /Register Form -->
                        </div>
                    </div>
                </div>
                <!-- /Account Content -->
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->
@include('custom.footer')
