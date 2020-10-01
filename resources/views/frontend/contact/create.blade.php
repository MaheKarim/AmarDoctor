@include('custom.header')

<div class="content" style="background:#227093;">
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
                                <h1 style="font-size: 32px; text-align: center; color: whitesmoke">Nursing Care (Home Service only)</span></h1>
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
                                    <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="form-control floating" value="{{ old('customer_name') }}">
                                    <label class="focus-label">Your Name</label>
                                    <div> {{ $errors->first('customer_name') }}</div>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="customer_email" value="{{ old('customer_email') }}" class="form-control floating" value="{{ old('customer_email') }}">
                                    <label class="focus-label">Your Email</label>
                                    <div> {{ $errors->first('customer_email') }}</div>

                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="customer_phn" value="{{ old('customer_phn') }}" class="form-control floating" value="{{ old('customer_phn') }}">
                                    <label class="focus-label">Your Phn Number</label>
                                    <div> {{ $errors->first('customer_phn') }}</div>
                                </div>

                                <div class="form-group ">
                                    <label>Select Any Service</label>
                                    <select name="nursing_service_id" class="form-control select">
                                        @php($nursing_service = \App\NursingService::all())
                                            <option value="selected" selected="selected">Please Select Any Service   ...</option>
                                        @foreach ($nursing_service as $key)
                                            <option {{ ( $key->nursing_service_id == $key->id) ? "Selected" : ""  }} value="{{$key->id}}">{{$key->nursingservice_name}}</option>
                                        @endforeach
                                    </select>
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

                            <hr>

                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>

                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>
        </div>

    </div>

</div>


@include('custom.footer')
