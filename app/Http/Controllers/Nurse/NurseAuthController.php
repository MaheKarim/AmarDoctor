<?php

namespace App\Http\Controllers\Nurse;

use App\User;
use App\Nurse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class NurseAuthController extends Controller
{
    //  code start here
    public function nurseSignUpForm()
    {
        return view('auth.nurse_register');
    }

    public function registerNurse(Request $request)
    {
        // Validation Need
        $user_id = User::insertGetId([
            'role_id' => 3,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phn_number' => $request->phn_number,
            'created_at' => Carbon::now()
        ]);
        if ($request->has('nid_card')){
            $nid_pic = $request->file('nid_card')->store('nurse','public');
        }
        if ($request->has('reg_card')){
            $bmdc_cer = $request->file('reg_card')->store('nurse','public');
        }

        Nurse::create([
            'user_id' => $user_id,
            'nid_card' => $nid_card,
            'reg_card' => $reg_card,
            'nursing_reg_number' => $request->nursing_reg_number,

        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login');
        }

        return "Wel Done Mr Doctor"; // error message
    }
}
