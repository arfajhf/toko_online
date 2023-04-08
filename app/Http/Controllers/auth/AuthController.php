<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            // return redirect()->intended(config('admin.prefix'));
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    // public function logoutuser()
    // {
    //     Auth::guard('admin')->logout();
    //     return redirect()->route('admin.login');
    // }
}


