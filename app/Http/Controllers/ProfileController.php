<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * @param User $profile
     * @return User
     */
    public function doctor(User $profile, Doctor $doctor)
    {
       // dd($doctor);

       $users =  User::where('username', $profile)->first();
       $doctors = Doctor::where('user_id', $profile)->first();

       return view('frontend.doctor_profile', compact('users', 'doctors'));

    }
}
