<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    // Code start Here
    public function passChange()
    {
        return view('backend.admin.admin_pass_change');
    }
}
