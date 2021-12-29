@extends('backend.multi-dashboard.user._layout_user')

@section('content')
    <br>
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">

                        <div class="card-body">
                            <!-- Modal -->
                            <!-- Notification Start Here -->
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            @if (session()->has('errorMSG'))
                                <div class="alert alert-danger">
                                    {{ session()->get('errorMSG') }}
                                </div>
                            @endif

                        </div>
                    <!-- Change Password Form -->
                        <form method="POST" action="{{route('user.prescription.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="status">Name</label>
                                <input name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="status">File</label>
                                <input name="file" type="file" class="form-control">
                            </div>

                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                            </div>
                        </form>
                        <!-- /Change Password Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
<script>
    import Index from "../../../../../public/ckeditor/samples/toolbarconfigurator/index.html";
    export default {
        components: {Index}
    }
</script>
