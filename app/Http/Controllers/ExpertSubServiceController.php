<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpertSubService;
use App\Models\ExpertService;
use App\Models\SubService;

class ExpertSubServiceController extends Controller
{
    public function index()
    {
        $subservices = ExpertSubService::all();
        $expert_services = ExpertService::all();
        $admin_subservices = SubService::all(); // Ensure this matches with the subservice table
        return view('Expertpanel.expertsubservice', compact('subservices', 'expert_services', 'admin_subservices'));
    }

    public function store(Request $request)
    {
        $subservice = new ExpertSubService();
        $subservice->ExpertService_IDF = $request->ServiceName;
        $subservice->SubServiceMaster_IDF = $request->SubService_Name;
        $subservice->ExpertSubService_Details = $request->ExpertSubService_Details;
        $subservice->save();
        return redirect()->back()->with('success', 'Subservice added successfully.');
    }

    public function edit($id)
    {
        $subservice = ExpertSubService::find($id);
        $expert_services = ExpertService::all();
        $admin_subservices = SubService::all(); // Ensure this matches with the subservice table
        return view('Expertpanel.editsubservice', compact('subservice', 'expert_services', 'admin_subservices'));
    }

    public function update(Request $request, $id)
    {
        $subservice = ExpertSubService::find($id);
        $subservice->ExpertService_IDF = $request->Service_Name;
        $subservice->SubServiceMaster_IDF = $request->SubService_Name;
        $subservice->ExpertSubService_Details = $request->ExpertSubService_Details;
        $subservice->save();
        return redirect()->route('expert.subservice.index')->with('success', 'Subservice updated successfully.');
    }

    public function destroy($id)
    {
        $subservice = ExpertSubService::find($id);
        $subservice->delete();
        return redirect()->back()->with('success', 'Subservice deleted successfully.');
    }
}
