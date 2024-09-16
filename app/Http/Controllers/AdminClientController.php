<?php

namespace App\Http\Controllers;

use App\Models\ClientMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminClientController extends Controller
{
    // Show the add client form
    public function index(){
        $clients = ClientMaster::where('is_added_by_admin')->get();
        return view('Adminpanel.client.index',compact('clients'));
    }

    public function create(){
        $clients = ClientMaster::where('is_added_by_admin','=',1)->get();
        return view('Adminpanel.client.create',compact('clients'));
    }

    // Store client data in the database
    public function store(Request $request)
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
            'is_added_by_admin' => 1,
        ]);
        return redirect()->route('admin.client')->with('success', 'Client created successfully!');
    }

    public function edit($id){
        $client = ClientMaster::where('Clientmaster_IDP','=',$id)->first();
        if (!$client) {
            return redirect()->back()->withErrors(['client_not_found' => 'The client with ID ' . $id . ' was not found.']);
        }
        return view('Adminpanel.client.edit',compact('client'));
    }

    public function update(Request $request,$id){
        $client = ClientMaster::where('Clientmaster_IDP','=',$id)->first();
        if (!$client) {
            return redirect()->back()->withErrors(['error' => 'Client not found!']);
        }
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:tbl_clientmaster,email,' . $id . ',Clientmaster_IDP',
            'phone' => 'required',
            'company_name' => 'required',
            'business_category' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);

        $client->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'business_category' => $request->business_category,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
        ]);

        return redirect()->route('admin.client')->with('success', 'Client updated successfully!');
    }

    public function destory($id){
        $client = ClientMaster::where('Clientmaster_IDP','=',$id)->delete();
        if(!$client){
            return redirect()->back()->withErrors(['error' => 'Client not found!']);
        }
        return redirect()->route('admin.client')->with('success', 'Client deleted successfully!');
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
