@extends('backend._layout')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title"> Custom Data Update Page</h4>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Custom Data Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">


                                <form action="{{ route('updateCustomData') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Hospital Name</h4>
                                        <input type="text" class="form-control" name="hospital_name" id="text"
                                               value="{{ $data->hospital_name }}">
                                        <input type="hidden" name="hospital_name_id" value="{{ $data->id }}">
                                    </div>

                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Patient Name</h4>
                                        <input type="text" class="form-control" name="patient_name" id="text" value="{{ $data->patient_name }}">
                                    </div>

                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Patient Number</h4>
                                        <input type="text" class="form-control" name="patient_number" id="text" value="{{ $data->patient_number }}">
                                    </div>

                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Add Doctor Name</h4>
                                        <input type="text" class="form-control" name="doctor_name" id="text" value="{{ $data->doctor_name }}">
                                    </div>
                                    <div class="form-group">
                                        <h4 style="font-size: 18px" class="text">Amount</h4>
                                        <input type="text" class="form-control" name="amount" id="text" value="{{ $data->amount }}">
                                    </div>
                                    <div class="form-group">
                                        <h4 style="font-size: 18px">
                                            Remarks
                                        </h4>
                                        <textarea name="remarks" class="form-control">{{ $data->remarks }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <h4 style="font-size: 18px">
                                            Appointment Date
                                        </h4>
                                        <input type="datetime-local" class="form-control" name="appoint_date">
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
