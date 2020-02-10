<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    // code here ...

    public function search ()
    {
        return view('frontend.searchpage');
    }
}
