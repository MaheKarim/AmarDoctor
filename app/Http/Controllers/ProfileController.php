<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // code ...
    /**
     * @param User $profile
     * @return User
     */
    public function doctor(User $profile)
    {
      // code...
    //  $profile = User::where('username', $profile)->first();
      return $profile;
    }
}
