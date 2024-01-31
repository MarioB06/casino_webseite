<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentifizierung erfolgreich
            return redirect()->intended('/dashboard');
        }

        // Authentifizierung fehlgeschlagen
        return redirect()->route('index')->with('error', 'Invalid username or password');
    }
}
