<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'Username' => 'required|string',
            'Password' => 'required|string',
        ]);

        $credentials = $request->only('Username', 'Password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'Username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

