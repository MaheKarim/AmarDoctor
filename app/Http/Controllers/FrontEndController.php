<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //  start here
    public function indexpage()
    {
        return view('frontend.index');
    }
}
