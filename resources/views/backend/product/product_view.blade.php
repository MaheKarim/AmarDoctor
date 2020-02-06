@extends('backend._layout')

@section('content')

<div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show Shop')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                       <div class="d-flex align-items-center">
                       <a href="{{ route('addProduct') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Product
                            </a>
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
                                       @if ($errors->any())
                                       <div class="alert alert-danger">
                                         <ul>
                                             @foreach ($errors->all() as $error)
                                               <li>{{ $error }}</li>
                                             @endforeach
                                         </ul>
                                       </div><br />
                                 @endif
                         <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Slug</th>
                                        <th>Description</th>
                                        <th>Product Image</th>
                                        <th>Package Rate</th>
                                        <th>Total Rate</th>
                                        <th>PHN Number</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->product_slug }}</td>
                                    <td>{!! $product->description !!}</td>
                                    <td> <img style="width:100%;max-width:400px" src="{{ asset('storage')}}/{{$product->package_image }} " /> </td>
                                    <td> {{ $product->total_rate }} </td>
                                    <td> {{ $product->package_rate }} </td>
                                    <td> {{ $product->phn_number }} </td>
                                        <td>
                                            <div class="form-button-action">

                                             <a href="#" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            <a href="{{ route('deleteProduct', $product->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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
