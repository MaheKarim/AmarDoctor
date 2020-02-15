<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    //
    public function index(){

        $data = [ ];
        $data['products'] = Product::all();
        return view('backend.product.product_view' , $data);
    }

    public function add()
    {
        // statements here
        $data = [ ];
        return view('backend.product.product_add', $data);
    }

    public function store(Request $request){

        $request->validate([
            'product_name' => 'required|min:3|max:120',
            'description' =>  'required|max:1500',
            'total_rate'  => 'required|max:25',
            'phn_number'  => 'required|max:11',
            'package_image' => 'required'
         ]);

        $image = '';
        if($request->has('package_image')){
            $image = $request->file('package_image')->store('package_images');
        }

        //  data insert
        $products = new Product();
        $products->product_name = $request->product_name;
        $products->product_slug = Str::slug($request->product_slug, '-');
        $products->description = $request->description;
        $products->total_rate = $request->total_rate;
        $products->package_rate = $request->package_rate;
        $products->phn_number = $request->phn_number;
        $products->package_image = $image;
        $products->save();
        // flash message
        session()->flash('success','Product Created successfully!');
        return redirect(route('showProduct'));
    }

    public function delete($id)
    {
        $products = Product::find($id);
        Storage::delete($products->package_image);
        $products->delete();

        session()->flash('success','Category Deleted Successfully!');
        return redirect(route('showProduct'));
    }

    public function slug($product_slug)
    {
      // code...
      $products = Product::where('product_slug', $product_slug)->first();

     return view('product.product', compact('products'));
    }

    public function allproduct()
    {
        $data = [ ];
        $data['products'] = Product::paginate(3);
        return view('frontend.allproduct', $data);
    }

    public function productSee ($product_slug)
    {
        $data = [' '];
        $data['productDetails'] = Product::where('product_slug', $product_slug)->first();
       // return view('frontend.');
    }
}
