<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientMaster;
use App\Models\Service;
use App\Models\SubService;
use App\Models\Activity;
use Illuminate\Support\Facades\Hash;

class ClientMasterController extends Controller
{

    // public function client_home()
    // {
    //     return view('Client.client_home');
    // }
    public function showClientHome()
    {
        // Fetch all services
        $services = Service::all();

        return view('Client.client_home', compact('services'));
    }

    // Fetch Subservices based on Service ID
    public function getSubservices($service_id)
    {
        $subservices = SubService::where('service_id', $service_id)->get();
        return response()->json($subservices);
    }

    // Fetch Activities based on Subservice ID
    public function getActivities($subservice_id)
    {
        $activities = Activity::where('subservice_id', $subservice_id)->get();
        return response()->json($activities);
    }


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
    
    public function cli_register(Request $request)
{
    // Validate the request input
    $request->validate([
        'email' => 'required|email|unique:tbl_clientmaster,email',
        'username' => 'required|string|unique:tbl_clientmaster,username',
        'password' => 'required|string|confirmed', // added 'confirmed' for password confirmation
    ]);

    // Create a new client
    $clientData = new ClientMaster();
    $clientData->email = $request->input('email');
    $clientData->username = $request->input('username');
    $clientData->password = Hash::make($request->input('password')); // Hash the password
    $clientData->save();

    // Set the session after registration
    session(['client_id' => $clientData->Clientmaster_IDP]); // Assuming 'Clientmaster_IDP' is the primary key
    session(['username' => $clientData->username]);
    session()->save(); // Save session data

    // Redirect to the desired page after registration
    return redirect()->route('client.home'); // Redirect to client dashboard or home page
}
    
    public function cli_login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        $user = ClientMaster::where('email', $credentials['email'])->first();
    
        if ($user && Hash::check($credentials['password'], $user->password)) {
            session(['client_id' => $user->id]); // Assuming 'id' is the primary key in tbl_clientmaster
    
            session(['username' => $user->username]);
            session()->save();
            return redirect()->intended('client/dashboard');
        }
    
        return redirect()->back()->withErrors(['password' => 'The provided credentials do not match our records.']);
    }

    public function store(Request $request)
    {
        $Clientmaster_IDP = session('Clientmaster_IDP');
    
        // Fetch the existing client record
        $clientMaster = ClientMaster::find($Clientmaster_IDP);
    
        // Validation rules
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('tbl_clientmaster', 'email')->ignore($clientMaster->Clientmaster_IDP, 'Clientmaster_IDP')
            ],
            'phone' => 'required|string|max:15',
            'company_name' => 'nullable|string|max:255',
            'business_category' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
            'country' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip' => 'required|string|max:10',
        ]);
    
        // Update the client data
        $clientMaster->first_name = $request->input('first_name');
        $clientMaster->last_name = $request->input('last_name');
        $clientMaster->email = $request->input('email');
        $clientMaster->phone = $request->input('phone');
        $clientMaster->company_name = $request->input('company_name');
        $clientMaster->business_category = $request->input('business_category');
        $clientMaster->address = $request->input('address');
        $clientMaster->country = $request->input('country');
        $clientMaster->city = $request->input('city');
        $clientMaster->state = $request->input('state');
        $clientMaster->zip = $request->input('zip');
        $clientMaster->save();
    
        return redirect()->route('client.services')->with('success', 'Client data updated successfully.');
    }

    
    public function logout()
{
    session()->forget('client_id');
    return redirect()->route('client.login');
}

public function index()
{
    return view('Client.index');
}
}
