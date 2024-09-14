<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpertService;
use App\Models\Service;

class ExpertServiceController extends Controller
{
    public function index()
    {
        $admin_services = Service::all(); // Fetch all available services
        $services = ExpertService::with('service')->get(); // Fetch expert services along with related service
        return view('Expertpanel.expertservice', compact('admin_services', 'services'));
       // return view('Expertpanel.expertservice', compact('services', 'admin_services'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ServiceName' => 'required|exists:tbservicemaster,ServiceMasterIDP',
            'ExpertService_Details' => 'required',
        ]);

        // Store the expert service
        ExpertService::create([
            'ServiceMaster_IDF' => $request->ServiceName,
            'ExpertService_Details' => $request->ExpertService_Details,
            'Expertmaster_IDF' => 1, // Replace with dynamic expert ID
            'Status' => 1, // Replace if status needs to be dynamic
        ]);

        return redirect()->route('expert.service.index')->with('success', 'Service added successfully.');
    }

    public function edit($id)
    {
        $service = ExpertService::findOrFail($id);
        return view('Expertpanel.services.edit', compact('service'));
    }

    public function destroy($id)
    {
        $service = ExpertService::findOrFail($id);
        $service->delete();

        return redirect()->route('expert.service.index')->with('success', 'Service deleted successfully.');
    }
}

