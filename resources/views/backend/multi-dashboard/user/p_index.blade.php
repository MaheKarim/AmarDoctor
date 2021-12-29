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
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">File</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prescriptions as $prescription)
                                <tr>
                                    <td>{{ data_get($prescription, "name") }}</td>
                                    <td>{{ data_get($prescription, "file") }}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
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
