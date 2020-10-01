@extends('backend._layout')

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Custom Information Save')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">

                            <a href="{{ route('admin.indexCustomData') }}" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Add Custom Information
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal -->

                        <!-- Notification Start Here -->
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                    @endif
                    <!-- Notification End Here -->

                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                <tr>
                                    <th>Hospital Name</th>
                                    <th>Patient Name</th>
                                    <th>Patient PHN Number</th>
                                    <th>Doctor Name</th>
                                    <th>Amount</th>
                                    <th>Remarks</th>
                                    <th>Appointment Date</th>
                                    <th>Created At</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($adminForms as $data)
                                    <tr>
                                        <td>{{ $data->hospital_name }}</td>
                                        <td>{{ $data->patient_name }}</td>
                                        <td>{{ $data->patient_number }}</td>
                                        <td>{{ $data->doctor_name }}</td>
                                        <td>{{ $data->amount }}</td>
                                        <td>{{ $data->remarks }}</td>
                                        <td>{{ date('d / M /Y  H:I A', strtotime($data->appoint_date))}}</td>
                                        <td>{{ date('d-M-Y h:i', strtotime($data->created_at)) }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('admin.editCustomData' , $data->id) }}"  type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                    <a href="{{ route('admin.deleteCustomData', $data->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
