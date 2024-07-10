<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    //

    public function index()
    {
        return view('Auth.login');
    }

    public function validate_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('tasks');
        }

        return redirect('login')->with('error', 'Login details are not valid');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('tasks.tasks');
        }

        return redirect('login')->with('error', 'You are not allowed to access');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}


