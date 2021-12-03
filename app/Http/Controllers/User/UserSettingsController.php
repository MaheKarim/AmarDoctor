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

        return view('backend.multi-dashboard.user.settings_page', compact('user'));
    }

    public function update(Request $request)
    {
            $user = User::findOrFail(Auth::id());
            $user->fill($request->all());
//            dd($request);
            $user->update();

            return redirect()->route('user.user.settings');
    }
}

