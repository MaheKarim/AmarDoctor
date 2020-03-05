@include('custom.header')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">

                        @if (session()->has('message'))
                            <div class="alert alert-info" role="alert">
                                <strong>Mail Sent Successfully!</strong>      {{ session()->get('message') }}
                            </div>
                        @endif

                        <div class="col-md-12 col-lg-8">
                            <div class="login-header">
                                <h3>Contact <span>For Doctor Service at Home</span></h3>
                                @if (count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="text" name="dContact_name" value="{{ old('dContact_name') }}" class="form-control floating">
                                    <label class="focus-label">Your Name</label>
                                    <div> {{ $errors->first('dContact_name') }}</div>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="dContact_email" value="{{ old('dContact_email') }}" class="form-control floating">
                                    <label class="focus-label">Your Email</label>
                                    <div> {{ $errors->first('dContact_email') }}</div>

                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="dContact_phn" value="{{ old('dContact_phn') }}" class="form-control floating">
                                    <label class="focus-label">Your Phn Number</label>
                                    <div> {{ $errors->first('dContact_phn') }}</div>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="dContact_address" class="form-control floating">
                                    <label class="focus-label">Your Location / Address</label>
                                    <div> {{ $errors->first('dContact_address') }}</div>

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