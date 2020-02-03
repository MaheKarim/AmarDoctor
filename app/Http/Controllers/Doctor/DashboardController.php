<?php

namespace App\Http\Controllers\Doctor;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //  dashboard for Doctor

    public function index()
    {

       return view('backend.multi-dashboard.doctor._home_doctor');
    }

    public function profile_seetings()
    {
        $data = User::find(Auth::id());
        return view('backend.multi-dashboard.doctor._profile_seetings', compact('data'));
    }

    // update profile picture
    public function updateProfilePic(Request $request)
    {
        // validation
        if($request->has('profile_pic')){
            // upload new image
            $image = $request->file('profile_pic')->store('doctor', 'public');

            // delete previous image
            Storage::delete('public/'.User::find(Auth::id())->profile_image);

            // insert image path to database
            User::find(Auth::id())->update([
                'profile_image'=> $image
            ]);
            return back();
        }
    }
}
