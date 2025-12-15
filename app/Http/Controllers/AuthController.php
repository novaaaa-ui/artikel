<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
       $credentials = $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:200',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            return redirect()->intended('/admin');
    }
        return back()->withErrors([

        'email' => 'Email atau password salah'
    ]);

    }

    public function logout(){
        Auth::logout(Auth::user());
        return redirect('/login');
    }
}