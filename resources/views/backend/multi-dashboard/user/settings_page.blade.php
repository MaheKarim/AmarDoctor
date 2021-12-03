@extends('backend.multi-dashboard.user._layout_user')

@section('content')
    <br>
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-10">

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
                        Address ::    {{ $user->address }} <br>
                        Your  Blood Group :: {{ trans('blood.blood_group.'.$user->blood_group) }} , <br>
                        Do You Wanna Donate Blood ??    {{ trans('boolean.status.'.$user->status) }}
                        <!-- Change Password Form -->
                        <form method="POST" action="{{route('user.user.updateInfo')}}">
                            @csrf
                            <div class="form-group">
                                <label for="status">Address</label>
                                <input name="address" class="form-control" value="{{ $user->address }}" >

                            </div>
                            <div class="form-group">
                                <label for="blood_group">Blood Group</label>
                                <select name="blood_group" id="" class="form-control">
                                    @foreach(trans('blood.blood_group') as $key => $item)
                                        <option value="{{$key}}" {{(old('blood_group') == $key || data_get($user, 'blood_group') == $key) ? 'selected':''}} > {{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Do You Wanna Donate Blood</label>
                                <select name="status"  class="form-control">
                                    <option value="">Select Status</option>
                                    @foreach(trans('boolean.status') as $key => $item)
                                        <option value="{{$key}}" @if($user->status == $key) selected @endif> {{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br> <br>
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
