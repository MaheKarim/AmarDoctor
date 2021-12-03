<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use App\User;

class BloodDonationController extends Controller
{
    public function index()
    {
        $donors = User::where('status', '=', 1)->get(); // Query
        $settings = SiteSettings::find(1);

        return view('backend.blood-donor.index', compact('settings', 'donors'));
    }
}
