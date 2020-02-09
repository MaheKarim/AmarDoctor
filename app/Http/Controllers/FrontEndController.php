<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;


class FrontEndController extends Controller
{
    //  start here
    public function indexpage()
    {
      //  $data = [ ];
        $reviews = Review::all();
        $products = Product::all();
        return view('frontend.index', compact('reviews', 'products'));
    }
}
