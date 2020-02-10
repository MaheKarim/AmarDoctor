<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;
use Illuminate\Support\Facades\Artisan;


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

    public function install ()
    {
        Artisan::call('migrate');
        Artisan::call('storage:link');
        Artisan::call('db:seed');

        return 'Migrate, Storage:Link, DB Seed Done!';
    }
}
