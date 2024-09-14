<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Subservice;
use Carbon\Carbon;

class SubserviceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('ServiceMasterIDP', 'desc')->get();
        $subservices = Subservice::with('service')->orderBy('SubService_IDP', 'desc')->get();
        return view('Adminpanel.subservice', compact('services', 'subservices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:tbservicemaster,ServiceMasterIDP',
            'subservice_name' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'status' => 'required|boolean',
        ]);
        
        Subservice::create([
            'ServiceM_IDF' => $request->service_id,
            'SubService_Name' => $request->subservice_name,
            'Details' => $request->notes,
            'Status' => $request->status,
            'TimeStamp' => now(),
            'UpdateTimeStamp' => now(),
            'CreatedBy' => 'default_user',
            'CreatedDate' => now(),
            'Modify' => 'default_user',
            'ModifyDate' => now(),
        ]);

        return redirect()->route('subservice.index')->with('success', 'Sub-Service added successfully.');
    }

    public function edit($id)
    {
        $subservice = Subservice::findOrFail($id);
        $services = Service::orderBy('ServiceMasterIDP', 'desc')->get();
        return view('Adminpanel.edit_subservice', compact('subservice', 'services'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'service_id' => 'required|exists:tbservicemaster,ServiceMasterIDP',
        'subservice_name' => 'required|string|max:255',
        'details' => 'nullable|string',
        'status' => 'required|boolean',
    ]);

    $subservice = Subservice::findOrFail($id);
    $subservice->ServiceM_IDF = $request->service_id;
    $subservice->SubService_Name = $request->subservice_name;
    $subservice->Details = $request->details;
    $subservice->Status = $request->status;
    $subservice->save();

    return redirect()->route('subservice.index')->with('success', 'Sub-Service updated successfully.');
}

    public function delete($id)
    {
        $subservice = Subservice::findOrFail($id);
        $subservice->delete();

        return redirect()->route('subservice.index')->with('success', 'Sub-Service deleted successfully.');
    }
}
