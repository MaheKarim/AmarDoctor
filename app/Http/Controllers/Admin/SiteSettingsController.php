<?php

namespace App\Http\Controllers\Admin;


use App\SiteSettings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SiteSettingsController extends Controller
{
    // Code Start
    public function index()
    {
        $data = [ ];
       // $data['user_details'] = User::find(Auth::id());
        //$data['site_data'] = SiteSettings::where('id', $data->id)->first();
       $data['site_data'] = SiteSettings::find(1);
        return view('backend.admin.settings', $data);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        SiteSettings::find(Auth::id())->update([
            'site_phnNumber'=>$request->site_phnNumber,
            'site_mail'=>$request->site_mail,
            'site_address'=>$request->site_address,
            'site_shortDescription' =>$request->site_shortDescription,
            'site_fbLink' =>$request->site_fbLink,
            'site_ytLink' =>$request->site_ytLink,
            'site_twitterLink' =>$request->site_twitterLink,
        ]);
        return back()->with('success', 'Profile Updated Successfully!');
    }
}
