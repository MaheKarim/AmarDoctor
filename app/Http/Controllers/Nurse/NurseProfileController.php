<?php

namespace App\Http\Controllers\Nurse;

use App\Nurse;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function nurse_picUpdate(Request $request)
    {
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

    public function profile_update(Request $request)
    {
        $user_id = Auth::user()->id;

        User::where('id', Auth::id())->update([
            'name'=>$request->name,
            'phn_number'=>$request->phn_number,
        ]);

        Nurse::where('user_id', Auth::id())->update([
            'present_address' =>$request->present_address,
            'edu_institute' =>$request->edu_institute,
            'passing_year'=>$request->passing_year,
            'experience'=>$request->experience,
            'area_name_id'=>$request->area_name_id,
            'nursing_reg_number'=>$request->nursing_reg_number,
            'about_me'=>$request->about_me,
            'edu_degree' =>$request->edu_degree,
        ]);

        return back()->with('success', 'Profile Updated Successfully!');
    }


}
