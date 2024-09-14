<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Log the login attempt
        Log::info('Login attempt with username: ' . $request->username);

        // Find the user in the database
        $user = DB::table('tbl_adminlogin')->where('UserName', $request->username)->first();

        if ($user) {
            // Log that the user was found
            Log::info('User found: ' . $user->UserName);

            // Check if the password matches
            if ($user->Password == $request->password) {
                // Log that the password matches
                Log::info('Password match for user: ' . $user->UserName);

                // Check if the user's account is active
                if ($user->Status == 1) {
                    // Log that the user's account is active
                    Log::info('User status active: ' . $user->UserName);

                    // Store the user in the session
                    Session::put('user', $user);

                    // Redirect to the dashboard
                    return redirect()->intended('/dashboard');
                } else {
                    // Log that the user's account is inactive
                    Log::warning('Inactive account for user: ' . $user->UserName);

                    // Redirect back with an error message
                    return back()->with('error', 'Your account is inactive.');
                }
            } else {
                // Log that the password does not match
                Log::warning('Password mismatch for user: ' . $user->UserName);

                // Redirect back with an error message
                return back()->with('error', 'Invalid username or password.');
            }
        } else {
            // Log that the user was not found
            Log::warning('User not found: ' . $request->username);

            // Redirect back with an error message
            return back()->with('error', 'Invalid username or password.');
        }
    }

    public function dashboard()
    {
        // Check if the user is in the session
        if (!Session::has('user')) {
            // If not, redirect to the admin panel login
            return redirect('/Adminpanel');
        }

        // Render the dashboard view
        return view('Adminpanel.dashboard');
    }

    public function logout()
    {
        // Forget the user session
        Session::forget('user');

        // Redirect to the admin panel login
        return redirect('/Adminpanel');
    }
}
