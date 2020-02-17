<?php

namespace App\Http\Controllers;


use App\Review;
use App\Product;
use App\SiteSettings;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    //  start here
    public function indexpage()
    {
      //  $data = [ ];
        $reviews = Review::all();
        $products = Product::paginate(4);;
        $settings = SiteSettings::find(1);
        return view('frontend.index', compact('reviews', 'products','settings'));
    }

    public function install ()
    {
        Artisan::call('migrate');
        Artisan::call('storage:link');
        Artisan::call('db:seed');

        return 'Migrate, Storage:Link, DB Seed Done!';
    }

    public function clear ()
    {
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
    }
}
