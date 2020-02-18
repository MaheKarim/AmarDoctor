@include('custom.header')

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="{{ asset('') }}frontend/assets/img/login-banner.png" class="img-fluid" alt="AmarDoctor Login">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Login <span>AmarDoctor</span></h3>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="email" name="email" class="form-control floating">
                                    <label class="focus-label">Email</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="password" name="password" class="form-control floating">
                                    <label class="focus-label">Password</label>
                                </div>

                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>

                                <div class="text-center dont-have">Are You Doctor ? Don’t have an account? <a href="{{ route('doctorSignUpForm') }}">Register</a></div>
                                <div class="text-center dont-have">Are You Nurse ? Don’t have an account? <a href="{{ route('nurse.signup_page') }}">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->

@include('custom.footer')
