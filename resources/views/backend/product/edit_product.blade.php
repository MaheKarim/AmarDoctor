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
                        <div class="card-title">Update Product Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">
                                <form action="{{ route('updateProduct') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Update Product Name</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name" value="{{ $products->product_name }}" placeholder="Enter Product Name">
                                        <input type="hidden" name="product_name_id"  value="{{ $products->id }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="text">Update Product Description</label>
                                        <textarea id="description" type="text" class="form-control" name="description" id="text" placeholder="Product Description">{{ $products->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="text">Update Total Rate</label>
                                        <input type="text" class="form-control" name="total_rate" id="total_rate" value="{{ $products->total_rate }}" placeholder="Enter Total Rate">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Update Package Rate</label>
                                        <input type="text" class="form-control" name="package_rate" id="package_rate" value="{{ $products->package_rate }}" placeholder="Enter Package Rate">
                                    </div>

                                    <div class="form-group">
                                        <label for="text">Update Package Slug</label>
                                        <input type="text" class="form-control" name="product_slug" id="product_slug" value="{{ $products->product_slug }}" placeholder="Update Product Slug">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="{{ url('/show/product') }}" class="btn btn-danger">Cancel</a>
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