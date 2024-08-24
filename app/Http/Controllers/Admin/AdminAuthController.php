<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function LoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required'
        ]);

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended(route('admin.dashboard'));
        }
        toast('The provided credentials do not match our records.','error');
        return redirect()->back()
        ->onlyInput('email');
    }
}
