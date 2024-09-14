<?php

namespace App\Http\Controllers;

use App\Models\ClientMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddClientController extends Controller
{
    // Show the add client form
    public function add_client()
    {
        return view('Adminpanel.add_client');
    }

    // Store client data in the database
    public function store_client(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'username' => 'required|unique:tbl_clientmaster',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'company_name' => 'required',
            'business_category' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);

        ClientMaster::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'business_category' => $request->business_category,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
        ]);

        return redirect()->route('client.list')->with('success', 'Client added successfully.');
    }

    // List all clients
    public function list_client()
    {
        $clients = ClientMaster::select('Clientmaster_IDP', 'first_name', 'last_name', 'email')->get();
        return view('Adminpanel.client_list', compact('clients'));
    }

    // Show the edit form for a client
    public function edit_client($id)
    {
        $client = ClientMaster::findOrFail($id);
        return view('Adminpanel.edit_client', compact('client'));
    }

    // Update client data
    public function update_client(Request $request, $id)
    {
        $client = ClientMaster::findOrFail($id);

        $client->update($request->all());

        return redirect()->route('client.list')->with('success', 'Client updated successfully.');
    }

    // Delete a client
    public function delete_client($id)
    {
        ClientMaster::destroy($id);

        return redirect()->route('client.list')->with('success', 'Client deleted successfully.');
    }

    public function add_expert()
    {
        return view('Adminpanel.add_expert');
    }
}
