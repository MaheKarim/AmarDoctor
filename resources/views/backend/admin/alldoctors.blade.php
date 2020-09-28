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
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                <tr>
                                    <th>Doctor Name</th>
                                    <th>Doctor Email</th>
                                    <th>Doctor PHN Number</th>
                                    <th>Doctor Edu Degree</th>
                                    <th>Doctor BMDC Certificate</th>
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
                                            <img style="width: 50px; max-width: auto;" src="{{ asset('storage') }}/{{ $doctor->bmdc_cer}}">
                                        </td>
                                        <td>{{ $doctor->Category->category_name}}</td>
                                        <td>{{ $doctor->Area->area_name}}</td>

                                        <td>
                                            <a href="{{ route('admin.deleteDoctor', $doctor->id) }}" type="button" class="btn btn-sm btn-danger">Delete</a>
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
