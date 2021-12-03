<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSettingsController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $status = trans('boolean.status');
        return view('backend.multi-dashboard.user.settings_page', compact('user', 'status'));
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        User::find($id)->update([
            'status'=> $request->status,
            'address'=>$request->address,
            'blood_group'=>$request->blood_group,
        ]);

            return redirect()->route('user.user.settings');
    }
}

