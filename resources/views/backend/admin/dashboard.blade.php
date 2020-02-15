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
{{--            <div class="ml-md-auto py-2 py-md-0">--}}
{{--                <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>--}}
{{--                <a href="#" class="btn btn-secondary btn-round">Add Customer</a>--}}
{{--            </div>--}}
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
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

                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($booking_data as $booking_datum)

                            <tr>
                                <td>{{$booking_datum->User->name}}</td>


                                <td>{{$booking_datum->doctor->name }}</td>

                                <td>2010/01/04</td>
                                <td>XXXX-XXXX-XXXX</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                                <td>Edit | DELETE</td>

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
