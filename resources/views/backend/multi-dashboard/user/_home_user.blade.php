@extends('backend.multi-dashboard.user._layout_user')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Hello Dear, {{ Auth::user()->name }} </h2>
                <h5 class="text-white op-7 mb-2">Premium Bootstrap 4 Admin Dashboard</h5>
            </div>

        </div>
    </div>
</div>


@endsection
