<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use App\Models\ClientLoginData; // Adjust if needed


class ClientController extends Controller
{
    public function ClientLogin()
    {
        return view('Client.client_login');
    }

    public function ClientRegister()
    {
        return view('Client.client_reg');
    }
   
    public function GetClient()
    {
        return view('Client.get_client');
    }

    public function demo()
    {
        return view('Client.client_getclient');
    }

    // public function signup(Request $request)
    // {
    //     // dd($request->all()); // Ensure all expected data is being sent
    //     // $validator = Validator::make($request->all(), [
    //     //     'username' => 'required|string|max:255|unique:tbl_clientlogin,username',
    //     //     'email' => 'required|string|email|max:255|unique:tbl_clientlogin,email',
    //     //     'password' => 'required|string|min:8|confirmed',
    //     // ]);

    //     // if ($validator->fails()) {
    //     //     return redirect()->back()->withErrors($validator)->withInput();
    //     // }

    //     // Client::create([
    //     //     'username' => $request->username,
    //     //     'email' => $request->email,
    //     //     'password' => Hash::make($request->password),
    //     // ]);
        
    //     // return redirect()->route('client.login')->with('success', 'Registration successful. Please login.');

        
    // }

    public function signup(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:tbl_client_login,username',
            'email' => 'required|string|email|max:255|unique:tbl_client_login,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Handle validation failures
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Insert the validated data into the database
        Client::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Hash the password
        ]);

        // Redirect to the login page with a success message
        return redirect()->route('client.services')->with('success', 'Registration successful. Please login.');
    }

    public function store(Request $request)
{
    \Log::info('Form submitted', $request->all()); // Log request data

    // Validate the form data
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:tbl_client_login,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Create a new client record
    $client = Client::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
    ]);

    // Check if the record was created
    \Log::info('Client created', $client->toArray());

    // Redirect or return response
    return redirect()->back()->with('success', 'Account created successfully!');
}


// public function loginForm(Request $request)
// {
//     $credentials = $request->only('email', 'password');

//     // Use the 'client' guard to authenticate with the ClientLoginData model
//     if (Auth::guard('client')->attempt($credentials)) {
//         return redirect()->intended('home');
//     }

//     return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
// }

public function loginForm(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Retrieve the user by email
        $user = ClientLoginData::where('email', $credentials['email'])->first();

        // Check if the user exists and if the provided password matches the stored password (in plain text)
        if ($user && $credentials['password'] === $user->password) {
            // Log the user in manually by storing their ID in the session
            session(['client_id' => $user->Client_IDP]);

            // Redirect to the intended page or home
            return redirect()->intended('client/services');
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors(['password' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('client.login');
    }
}