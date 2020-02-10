<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

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
        // return $doctors;
        return view('frontend.searchdoctor_profile' , compact('doctors'));
    }
}
