<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    //
    public function index()
    {
        return view ('backend.seetings');
    }

    public function updateProfile(Request $request)
    {
         // return $request;

        $this->validate($request,[
            'name' => 'required|min:4',
            'username' => 'required|unique:users,username|min:4',
            // 'profile_image' => 'required|mimes:jpeg,jpg,png,bmp',
            'phn_number' => 'min:11|max:11|integer',
        ]);

//            $profile_image = $request->file('profile_image');
//            $slug = str_slug($request->name);
//            $user = User::findOrFail(Auth::id());
//            if(isset($profile_image))
//            {
//                $currentDate = Carbon::now()->toDateString();
//                $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$profile_image->getClientOriginalExtension();
//
//                if (!Storage::disk('public')->exists('profile'))
//                {
//                    Storage::disk('public')->makeDirectory('profile');
//                }
//                // Delete Old Image
//                if (Storage::disk('public')->exists('profile/'.$user->profile_image))
//                {
//                    Storage::disk('public')->delete('profile/'.$user->profile_image);
//                }
//                $profile_image = Image::make('$profile_image')->resize(500, 500)->save();
//                Storage::disk('public')->put('profile/'.$imageName, $image);
//            } else {
//                $imageName = $user->profile_image;
//            }

//        if ($request->hasFile('profile_image'))
//        {
//            $profile_image = $request->profile_image;
//
//
//            $new_profile_image = time().$profile_image->getClientOriginalName();
//
//            $profile_image->move('public/profile', $new_profile_image);
//            $user->profile_image = 'public/profile/ ' . $new_profile_image;
//        }


           $data = [ ];
           $data['user'] = Auth::user();
           $data['user']->name = $request->name;
           $data['user']->username = $request->username;
         //   $user->profile_image = $imageName;
           $data['user']->phn_number = $request->phn_number;
           $data['user']->save();
            session()->flash('success','Profile Updated Successfully!');
            return redirect(route('profile.update', $data));
    }
}
