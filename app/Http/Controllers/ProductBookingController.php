<?php

namespace App\Http\Controllers;

use App\ProductBooking;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductBookingController extends Controller
{
    // Code Start Here
    public function productBooking ($id)
    {
        ProductBooking::create([
           'user_id' => Auth::id(),
           'product_id' => $id,
            'status_name_id' => 1,
        ]);
        $data = [ ];
        $data['settings'] = SiteSettings::find(1);

        return view('frontend.product_booking_status', $data);
    }
}
