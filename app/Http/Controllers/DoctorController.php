<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    // doctor sign up form view
    public function signUpForm()
    {
        return view("auth.doctorSignUp");
    }

    // doctor sign up form submit
    public function signUpFormSubmit(Request $request)
    {
        // status 1 = pending
        // status 2 = approve
        // status 3 = disabled

        // have to validate don't miss it

        // inserting data to user table
        $user_id = User::insertGetId([
            'role_id' => 2,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phn_number' => $request->phn_number,
            'created_at' => Carbon::now()
        ]);
        if ($request->has('bmdc_cer')){
            $bmdc_cer = $request->file('bmdc_cer')->store('doctor','public');
        }
        if ($request->has('nid_pic')){
            $nid_pic = $request->file('nid_pic')->store('doctor','public');
        }

        Doctor::create([
            'user_id' => $user_id,
            'nid_pic' => $nid_pic,
            'bmdc_cer' => $bmdc_cer,
            'bmdc_reg_no' => $request->bmdc_reg_no
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return "Loged In";
        }

        return "Wel Done Mr Doctor"; // error message
    }


}
