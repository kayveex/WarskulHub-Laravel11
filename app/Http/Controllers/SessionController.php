<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index() {
        return view('Pages.Auth.login');
    }

    function doLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $loginInfo=[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($loginInfo)) {
            return redirect(('/dashboard'));
        }else {
            return redirect(('/'))->with('error', 'Email atau password salah!');
        }
        
    }
}
