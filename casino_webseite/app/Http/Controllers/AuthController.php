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
            $user = Auth::user();
            $account = $user->account;
    
            return redirect()->intended('/dashboard')->with('account', $account);
        }
    
        // Authentifizierung fehlgeschlagen
        return redirect()->route('index')->with('error', 'Invalid username or password');
    }
}
