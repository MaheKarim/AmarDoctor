@extends('backend._layout')

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show Nurse')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <form action="{{route('admin.export.onlyNurse')}}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-outline-info">Download Nurse Info</button>
                                    </form>
                                </div>
                            </div>
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
                                    <th> Name</th>
                                    <th> Mail</th>
                                    <th> PHN Number</th>
                                    <th> Username</th>
                                    <th> Reg No</th>
                                    <th> Home Service</th>
                                    <th> Area</th>
                                    <th>Edu Institute</th>
                                    <th>Passing Year</th>
                                    <th>Nurse ID Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($details_user as $detail)
                                    <tr>
                                        <td>{{ $detail->User->name }}</td>
                                        <td>{{ $detail->User->email }}</td>
                                        <td>{{ $detail->User->phn_number }}</td>
                                        <td>{{ $detail->User->username }}</td>
                                        <td>{{ $detail->nursing_reg_number }}</td>
                                        <td>{{ $detail->HomeServiceStatus->service_status }}</td>
                                        <td>{{ $detail->Area->area_name }}</td>
                                        <td>{{ $detail->edu_institute }}</td>
                                        <td>{{ $detail->passing_year }}</td>
                                        <td>{{ $detail->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                            <br> <br> <br> <br>
                        <!-- Start From Here -->
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                <tr>
                                    <th> Name</th>
                                    <th> Mail</th>
                                    <th> PHN Number</th>
                                    <th> Username</th>
                                    <th> Reg No</th>
                                    <th> Home Service</th>
                                    <th> Area</th>
                                    <th>Edu Institute</th>
                                    <th>Passing Year</th>
                                    <th>Nurse ID Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($nurses as $nurse)
                                    <tr>
                                        <td>{{ $nurse->User->name }}</td>
                                        <td>{{ $nurse->User->email }}</td>
                                        <td>{{ $nurse->User->phn_number }}</td>
                                        <td>{{ $nurse->User->username }}</td>
                                        <td>{{ $nurse->nursing_reg_number }}</td>
                                        <td>{{ $nurse->HomeServiceStatus->service_status }}</td>
                                        <td>{{ $nurse->Area->area_name }}</td>
                                        <td>{{ $nurse->edu_institute }}</td>
                                        <td>{{ $nurse->passing_year }}</td>
                                        <td>{{ $nurse->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Start From Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
