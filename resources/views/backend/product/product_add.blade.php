@extends('backend._layout')


@section('title')
    Add Dokan
@endsection
@section('content')
<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Product Creation')
            </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                <a href="{{ url('/home') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Forms</a>
                </li>

            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-title">Add Product Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">

                            <!-- error message -->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                     @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <!-- error message end -->
                            <!-- Notification Start Here -->
                            @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                               @endif
                            <!-- Notification End Here -->
                        <form action="{{ url('store-product') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="form-group">
                                    <label for="text">Add Shop Name</label>
                                    <input type="text" class="form-control" name="product_name" id="title" onkeyup="urlGen()" placeholder="Enter Product Name">
                                    <label for="text">Product Sug</label>
                                    <input type="text" class="form-control" name="product_slug" id="url"  placeholder="Enter Product Slug">

                                    <label for="text">Add Product Description</label>
                                    <textarea id="description" type="text" class="form-control" name="description" id="text" placeholder="Product Description"></textarea>

                                    <label for="text">Total Rate</label>
                                    <input type="text" class="form-control" name="total_rate" id="text" placeholder="Total Rate">

                                    <label for="text">Package Rate</label>
                                    <input type="text" class="form-control" name="package_rate" id="text" placeholder="Package Rate">

                                    <label for="text">Add Product Number</label>
                                    <input type="text" class="form-control" name="phn_number" id="text" placeholder="Phn Number">


                                    <label for="text">Choose Shop Image</label>
                                   <input type="file" class="form-control" name="package_image">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                                <button class="btn btn-success">Submit</button>
                                <a href="{{ route('showProduct') }}" class="btn btn-danger">Cancel</a>
                        </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection

{{--  --}}


