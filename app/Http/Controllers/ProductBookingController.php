<?php

namespace App\Http\Controllers;

use Auth;
use App\ProductBooking;
use App\SiteSettings;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class ProductBookingController extends Controller
{
    // Code Start Here
    public function productBooking ($id)
    {
        ProductBooking::create([
           'user_id' => Auth::id(),
           'product_id' => $id,
        ]);
        $data = [ ];
        $data['settings'] = SiteSettings::find(1);
      //  dd($data);
      //  var_dump($id);
        return view('frontend.product_booking_status', $data);
    }
}
