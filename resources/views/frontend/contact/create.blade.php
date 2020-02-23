@include('custom.header')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        {{--<div class="col-md-7 col-lg-6 login-left">--}}
                            {{--<img src="{{ asset('') }}frontend/assets/img/login-banner.png" class="img-fluid" alt="AmarDoctor Login">--}}
                        {{--</div>--}}
                        <div class="col-md-12 col-lg-8">
                            <div class="login-header">
                                <h3>Contact <span>For Nurse</span></h3>
                                @if (count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="form-control floating">
                                    <label class="focus-label">Your Name</label>
                                    <div> {{ $errors->first('customer_name') }}</div>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="customer_email" value="{{ old('customer_email') }}" class="form-control floating">
                                    <label class="focus-label">Your Email</label>
                                    <div> {{ $errors->first('customer_email') }}</div>

                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="customer_phn" value="{{ old('customer_phn') }}" class="form-control floating">
                                    <label class="focus-label">Your Phn Number</label>
                                    <div> {{ $errors->first('customer_phn') }}</div>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="customer_address" class="form-control floating">
                                    <label class="focus-label">Your Location / Address</label>
                                    <div> {{ $errors->first('customer_address') }}</div>

                                </div>
                                <div class="form-group form-focus">
                                    <label class="focus-label">Why You Need Nurse ?</label>
                                    <textarea type="text" name="customer_message" class="form-control"></textarea>
                                </div>

                                <br> <hr>

                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>

                            </form>
                            <hr> <br>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>
        </div>

    </div>

</div>


@include('custom.footer')