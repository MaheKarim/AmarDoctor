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
                                    <th>Nurse Name</th>
                                    <th>Nurse Mail</th>
                                    <th>Nurse PHN Number</th>
                                    <th>Nurse Username</th>
                                    <th>Nurse Reg No</th>
                                    <th>Nurse ID Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($details_user as $detail)
                                    <tr>
                                        <td>{{ $detail->name }}</td>
                                        <td>{{ $detail->email }}</td>
                                        <td>{{ $detail->phn_number }}</td>
                                        <td>{{ $detail->username }}</td>
                                        <td>{{ $detail->nursing_reg_number }}</td>
                                        <td>{{ $detail->created_at }}</td>


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
