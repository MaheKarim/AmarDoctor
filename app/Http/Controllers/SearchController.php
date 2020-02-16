<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\SiteSettings;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    // code here ...

    public function search ()
    {

        return view('frontend.searchpage');
    }

    public function search_doctor(Request $request)
    {
        if ($request->category && $request->area){
            $query = [['category_name_id', $request->category], ['area_name_id', $request->area]];
        }elseif ($request->area){
            $query = [['area_name_id', $request->area]];
        }elseif ($request->category){
            $query = [['category_name_id', $request->category]];
        }else{
            $query = [['id', '!=', null]];
        }

        $doctors = Doctor::where($query)->get();
        $data = User::find(Auth::id());
        $settings = SiteSettings::find(1);

        return view('frontend.searchdoctor_profile' , compact('doctors', 'data','settings'));
    }
}
