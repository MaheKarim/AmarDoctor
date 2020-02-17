<?php

namespace App\Http\Controllers\Doctor;


use App\SiteSettings;
use App\User;
use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;



class DashboardController extends Controller
{
    //  dashboard for Doctor

    public function index()
    {
      $data = User::find(Auth::id());
      $details = Doctor::where('user_id', $data->id)->first();
      $details_user = User::where('id', $data->id)->first();


      return view('backend.multi-dashboard.doctor._home_doctor', compact('data','details','details_user'));
    }

    public function profile_seetings()
    {
        $data = User::find(Auth::id());
        $details = Doctor::where('user_id', $data->id)->first();
        $details_user = User::where('id', $data->id)->first();
        $settings = SiteSettings::find(1);
        return view('backend.multi-dashboard.doctor._profile_seetings', compact('data', 'details','details_user','settings'));
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

    public function profileSettings(Request $request)
    {

        // Validation Rule Will Apply

        $user_id = Auth::user()->id;

        User::where('id', Auth::id())->update([
          'name'=>$request->name,
          'phn_number'=>$request->phn_number,
        ]);

        Doctor::where('user_id', Auth::id())->update([
            'about_me'=>$request->about_me,
            'category_name_id'=>$request->category_name_id,
            'area_name_id'=>$request->area_name_id,
            'edu_degree' =>$request->edu_degree,
            'present_address' =>$request->present_address,
        ]);

        return back()->with('success', 'Profile Updated Successfully!');

    }
}
