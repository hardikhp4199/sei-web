<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 // Import your model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\ClientLoginData; // Adjust if needed

class ClientLoginDataController extends Controller
{
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'email' => 'required|email|unique:clientlogindata,email',
        'username' => 'required|string|unique:clientlogindata,username',
        'password' => 'required|string',
    ]);

    // Create a new ClientLoginData instance
    $clientData = new ClientLoginData();
    $clientData->email = $request->input('email');
    $clientData->username = $request->input('username');
    $clientData->password = $request->input('password'); // Save the password as is
    $clientData->save();

    // Redirect or respond
    //return redirect()->back()->with('success', 'Data saved successfully!');
    return redirect()->route('client.services')->with('success', 'Registration successful. Please Enter Details.');
}
}

