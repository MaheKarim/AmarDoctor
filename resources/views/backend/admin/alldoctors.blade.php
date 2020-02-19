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



                                        <td>
                                            <div class="form-button-action">
                                                <a href="#" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <a href="#" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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
