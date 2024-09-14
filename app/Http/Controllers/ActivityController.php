<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Subservice;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $subservices = Subservice::all();
        $activities = Activity::with('service', 'subservice')->get();
        return view('Adminpanel.activity', compact('services', 'subservices', 'activities'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'servicem_idf' => 'required|exists:tbservicemaster,ServiceMasterIDP',
            'subservice_idf' => 'required|exists:tbl_subservice,SubService_IDP',
            'activity_name' => 'required|string|max:255',
            'rate_type' => 'required|string|in:hourly,daily,fixed',
            'rate' => 'required|numeric|min:0',
        ]);

        Activity::create([
            'servicem_idf' => $request->servicem_idf,
            'subservice_idf' => $request->subservice_idf,
            'activity_name' => $request->activity_name,
            'rate_type' => $request->rate_type,
            'rate' => $request->rate,
        ]);

        return redirect()->route('activity.index')->with('success', 'Activity added successfully.');
    }

    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        $services = Service::all();
        $subservices = Subservice::all();
        return view('Adminpanel.edit_activity', compact('activity', 'services', 'subservices'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'servicem_idf' => 'required|exists:tbservicemaster,ServiceMasterIDP',
            'subservice_idf' => 'required|exists:tbl_subservice,SubService_IDP',
            'activity_name' => 'required|string|max:255',
            'rate_type' => 'required|string|in:hourly,daily,fixed',
            'rate' => 'required|numeric|min:0',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->update([
            'servicem_idf' => $request->servicem_idf,
            'subservice_idf' => $request->subservice_idf,
            'activity_name' => $request->activity_name,
            'rate_type' => $request->rate_type,
            'rate' => $request->rate,
        ]);

        return redirect()->route('activity.index')->with('success', 'Activity updated successfully.');
    }

    public function delete($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activity.index')->with('success', 'Activity deleted successfully.');
    }
}
