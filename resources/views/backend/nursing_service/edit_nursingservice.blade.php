@extends('backend._layout')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Update Page</h4>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Nursing Service Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">
                                <form action="{{ route('admin.nursing_service.update') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Update Nursing Service</label>
                                        <input type="text" class="form-control" name="nursingservice_name" id="nursingservice_name" value="{{ $nursing_service->nursingservice_name }}" placeholder="Update here">
                                        <input type="hidden" name="nursingservice_name_id"  value="{{ $nursing_service->id }}">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="{{ url('/show/area') }}" class="btn btn-danger">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
