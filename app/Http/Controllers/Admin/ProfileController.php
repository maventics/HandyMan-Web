<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function settings()
    {
        return view('admin.profile.settings');
    }

    public function profileUpdate(Request $request)
    {
        dd($request->all());
    }
}
