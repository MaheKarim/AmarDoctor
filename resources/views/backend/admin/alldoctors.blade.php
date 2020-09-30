@extends('backend._layout')

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show Doctor')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <form action="{{route('admin.export.onlyDoctor')}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-outline-info">Download Doctor Info</button>
                            </form>
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
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>PHN Number</th>
                                    <th>Edu Degree</th>
                                    <th>BMDC Certificate</th>
                                    <th>NID Pic</th>
                                    <th>Working Experience</th>
                                    <th>Home Service</th>
                                    <th>Doctor Fees</th>
                                    <th>Category</th>
                                    <th>Area</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->User->name }}</td>
                                        <td>{{ $doctor->User->email }}</td>
                                        <td>{{ $doctor->User->phn_number }}</td>
                                        <td>{{ $doctor->edu_degree }}</td>
                                        <td>
                                            <img style="width: 50px; max-width: auto;"
                                                 src="{{ asset('storage') }}/{{ $doctor->bmdc_cer}}">
                                        </td>
                                        <td>
                                            <img style="width: 50px; max-width: auto;"
                                                 src="{{ asset('storage') }}/{{ $doctor->nid_pic}}">
                                        </td>
                                        <td>{{ $doctor->work_exp }}</td>
                                        <td>{{ $doctor->HomeServiceStatus->service_status }}</td>
                                        <td>{{ $doctor->doctor_fees }}</td>
                                        <td>{{ $doctor->Category->category_name}}</td>
                                        <td>{{ $doctor->Area->area_name}}</td>

                                        <td>
                                            <a href="{{ route('admin.deleteDoctor', $doctor->id) }}" type="button"
                                               class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- New table Start -->
                        <br> <br> <br>
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>PHN Number</th>
                                    <th>Edu Degree</th>
                                    <th>BMDC Certificate</th>
                                    <th>NID Pic</th>
                                    <th>Working Experience</th>
                                    <th>Home Service</th>
                                    <th>Doctor Fees</th>
                                    <th>Category</th>
                                    <th>Area</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($availabledoctors as $availabledoctor)
                                    <tr>
                                        <td>{{ $availabledoctor->User->name }}</td>
                                        <td>{{ $availabledoctor->User->email }}</td>
                                        <td>{{ $availabledoctor->User->phn_number }}</td>
                                        <td>{{ $availabledoctor->edu_degree }}</td>
                                        <td>
                                            <img style="width: 50px; max-width: auto;"
                                                 src="{{ asset('storage') }}/{{ $availabledoctor->bmdc_cer}}">
                                        </td>
                                        <td>
                                            <img style="width: 50px; max-width: auto;"
                                                 src="{{ asset('storage') }}/{{ $availabledoctor->nid_pic}}">
                                        </td>
                                        <td>{{ $availabledoctor->work_exp }}</td>
                                        <td>{{ $availabledoctor->HomeServiceStatus->service_status }}</td>
                                        <td>{{ $availabledoctor->doctor_fees }}</td>
                                        <td>{{ $availabledoctor->Category->category_name}}</td>
                                        <td>{{ $availabledoctor->Area->area_name}}</td>

                                        <td>
                                            <a href="{{ route('admin.deleteDoctor', $doctor->id) }}" type="button"
                                               class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- New table End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
