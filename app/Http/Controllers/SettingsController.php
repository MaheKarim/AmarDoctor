<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'username' => 'required|unique|min:4',
            'profile_image' => 'required|image',
            'phn_number' => 'min:11|max:11|integer',

        ]);
            $profile_image = $request->file('profile_image');
            $slug = str_slug($request->name);
            $user = User::findOrFail(Auth::id());
            if(isset($profile_image))
            {
                $currentDate = Carbon::now()->toDateString();
                $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$profile_image->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('profile'))
                {
                    Storage::disk('public')->makeDirectory('profile');
                }
                // Delete Old Image
                if (Storage::disk('public')->exists('profile/'.$user->profile_image))
                {
                    Storage::disk('public')->delete('profile/'.$user->profile_image);
                }
            }
    }
}
