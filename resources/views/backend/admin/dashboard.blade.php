@extends('backend._layout')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"> Welcome to Dashboard , <strong> {{ Auth::user()->name }} </strong>  <br>
                   </b>
                </h2>
                <h4 class="text-white op-12 mb-2">You are authenticated as <b> {{   Auth::user()->role->name }} </b> </h4>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">

   <!--  End Star -->
        <div class="col-md-4">
            <div class="card card-secondary">
                <div class="card-body skew-shadow">
                    <h1>{{ \App\Booking::count() }}</h1>
                    <h5 class="op-8">Total Call For Doctor Booking</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-8">Booking</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary-gradient">
                <div class="card-body bubble-shadow">
                    <h1>{{ $users = \App\User::where('role_id','2')->count() }}</h1>
                    <h5 class="op-8">Total Doctor</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-8">Doctor Model</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary2">
                <div class="card-body curves-shadow">
                    <h1>{{ $users = \App\User::where('role_id','3')->count() }}</h1>
                    <h5 class="op-8">Total Nurse</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-8">Nurse Model</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--   Data Table Add -->
    <div class="row">
        <div class="col-md-12">
            <!-- Notification Start Here -->
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        <!-- Notification End Here -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Appointment List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Doctor Name</th>
                                <th>Category</th>
                                <th>Appointment date</th>
                                <th>User PHN No</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Patient Name</th>
                                <th>Doctor Name</th>
                                <th>Category</th>
                                <th>Appointment date</th>
                                <th>User PHN No</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Delete</th>

                            </tr>
                            </tfoot>
                            <tbody>

                @foreach($booking_all  as $booking)
                            <tr>
                                <td>{{ $booking->User->name }}</td>
                                <td>{{ $booking->get_doctor_info->name }}</td>
                               <td>{{ $booking->get_doctor_details->Category->category_name }}</td>
                                <td>{{ $booking->created_at->format('jS F Y') }}</td>
                                <td>{{ $booking->User->phn_number }}</td>
                                <td>{!! $booking->Status->status_name !!}</td>
                                <td>
                                    <a href="{{ route('statusChangePage', $booking->id )}}" type="button" class="btn btn-warning">Edit</a>

                                </td>
                                <td>
                                    <a href="{{ route('bookingDelete', $booking->id )}}" type="button" class="btn btn-danger">Delete</a>
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
    <!-- Doctor Booking Table  -->
    <!-- Product Booking Start -->
    <div class="row">
        <div class="col-md-12">
            <!-- Notification Start Here -->
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
        @endif
        <!-- Notification End Here -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Buying Request</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th>Buyer Name</th>
                                <th>Buyer Phn</th>
                                <th>Buyer Email</th>
                                <th>Product Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PP</td>
                                    <td>UU</td>
                                    <td>OO</td>
                                    <td>LL</td>
                                    <td>YY</td>
                                    <td>BB</td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Booking End -->
</div>
@endsection
