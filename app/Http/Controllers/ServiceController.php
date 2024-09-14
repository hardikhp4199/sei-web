<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('ServiceMasterIDP', 'desc')->get();
        return view('Adminpanel.service', compact('services'));
    }

    public function addService(Request $request)
    {
        $validatedData = $request->validate([
            'Servicename' => 'required|max:500',
            'servicedetails' => 'nullable',
            'status' => 'nullable|in:1,0',
        ]);

        $service = new Service();
        $service->ServiceName = $validatedData['Servicename'];
        $service->ServiceDetails = $validatedData['servicedetails'];
        $service->Status = $validatedData['status'];
        $service->AdminIDF = 1; // Replace with logic to get AdminIDF dynamically
        $service->created_at = now();
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service added successfully.');
    }

    public function editService($id)
    {
        $service = Service::where('ServiceMasterIDP', $id)->firstOrFail();
        return view('Adminpanel.edit_service', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Servicename' => 'required|max:500',
            'servicedetails' => 'nullable',
            'status' => 'nullable|in:1,0',
        ]);

        $service = Service::find($id);
        $service->ServiceName = $validatedData['Servicename'];
        $service->ServiceDetails = $validatedData['servicedetails'];
        $service->Status = $validatedData['status'];
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
