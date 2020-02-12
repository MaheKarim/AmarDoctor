<?php

namespace App\Http\Controllers\Nurse;

use App\Nurse;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NurseProfileController extends Controller
{
    // Code Start Here
    public function settings_page ()
    {
        $data = User::find(Auth::id());
        $details = Nurse::where('user_id', $data->id)->first();
        $details_user = User::where('id', $data->id)->first();
        return view('backend.multi-dashboard.nurse._profile_settings', compact('data', 'details', 'details_user'));
    }
}
