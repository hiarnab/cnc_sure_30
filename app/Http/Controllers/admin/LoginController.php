<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loggedIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credientials = $request->only('email', 'password');

        if (Auth::attempt($credientials)) {

            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        } else {
            return back()->withErrors([
                'email' => 'Provided crediential do not match our records'
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

         $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('success', 'You have been logged out successfully.');

        return redirect()->route('login');
    }
}
