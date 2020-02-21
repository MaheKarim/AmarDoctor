<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use App\User;
use App\Doctor;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * @param User $profile
     * @return User
     */

    public function show ($username)
    {
     //   return $username;
        $user =  User::whereUsername($username)->first();
       // $details = Doctor::where('user_id', $user->username)->get();
        $settings = SiteSettings::find(1);
       if ($user){
            // User Exists
           return view('frontend.doctor_profile', compact('user', 'settings'));
       } else {
           // Return False
           dd($user);
       }
    }
}
