@extends('backend._layout')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Custom Information Save')
            </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('showCustomData') }}">Show Custom Information</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('indexCustomData') }}">Add Custom Data</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-title">Add Custom Information</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">

                                <!-- error message -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <!-- error message end -->
                                <!-- Notification Start Here -->
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                            @endif
                            <!-- Notification End Here -->
                                <form action="{{ route('saveData') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Hospital Name</h4>
                                        <input type="text" class="form-control" name="hospital_name" id="text">
                                    </div>

                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Patient Name</h4>
                                        <input type="text" class="form-control" name="patient_name" id="text">
                                    </div>

                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Patient Number</h4>
                                        <input type="text" class="form-control" name="patient_number" id="text">
                                    </div>

                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Doctor Name</h4>
                                        <input type="text" class="form-control" name="doctor_name" id="text">
                                    </div>
                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Amount</h4>
                                        <input type="text" class="form-control" name="amount" id="text">
                                    </div>
                                    <div class="form-group">
                                        <h4 style="font-size: 18px">
                                            Remarks
                                        </h4>
                                        <textarea name="remarks" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h4 style="font-size: 18px">
                                            Remarks
                                        </h4>
                                        <input type="datetime-local" class="form-control" name="appoint_date" value="{{ $data->appoint_date }}">
                                    </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <a href="{{ route('showArea') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
