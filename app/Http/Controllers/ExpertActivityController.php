<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpertActivity;
use App\Models\ExpertService;
use App\Models\ExpertSubService;
use App\Models\Activity;

class ExpertActivityController extends Controller
{
    public function index()
    {
        $activities = ExpertActivity::all();
        $expert_services = ExpertService::all();
        $expert_subservices = ExpertSubService::all();
        $admin_activities = Activity::all(); // Ensure this matches with the activity table
        return view('Expertpanel.expertactivity', compact('activities', 'expert_services', 'expert_subservices', 'admin_activities'));
    }

    public function store(Request $request)
    {
        $activity = new ExpertActivity();
        $activity->ExpertService_IDF = $request->Service_Name;
        $activity->ExpertSubService_IDF = $request->SubService_Name;
        $activity->ActivityMaster_IDF = $request->Activity_Name;
        $activity->each_activity_with_qty_unit = $request->each_activity_with_qty_unit;
        $activity->estimate_time = $request->estimate_time;
        $activity->inr_rate = $request->inr_rate;
        $activity->international_rate = $request->international_rate;
        $activity->currency = $request->currency;
        $activity->rates = $request->rates;
        $activity->commission_amount = $request->commission_amount;
        $activity->gst_tds = $request->gst_tds;

        if ($request->gst_tds == 'gst') {
            $activity->CGST = $request->CGST;
            $activity->SGST = $request->SGST;
            $activity->IGST = $request->IGST;
        } elseif ($request->gst_tds == 'tds') {
            $activity->TDS_percentage = $request->TDS_percentage;
            $activity->TDS_amount = $request->TDS_amount;
        }

        $activity->save();
        return redirect()->back()->with('success', 'Activity added successfully.');
    }

    public function edit($id)
    {
        $activity = ExpertActivity::find($id);
        $expert_services = ExpertService::all();
        $expert_subservices = ExpertSubService::all();
        $admin_activities = Activity::all(); // Ensure this matches with the activity table
        return view('Expertpanel.editactivity', compact('activity', 'expert_services', 'expert_subservices', 'admin_activities'));
    }

    public function update(Request $request, $id)
    {
        $activity = ExpertActivity::find($id);
        $activity->ExpertService_IDF = $request->Service_Name;
        $activity->ExpertSubService_IDF = $request->SubService_Name;
        $activity->ActivityMaster_IDF = $request->Activity_Name;
        $activity->each_activity_with_qty_unit = $request->each_activity_with_qty_unit;
        $activity->estimate_time = $request->estimate_time;
        $activity->inr_rate = $request->inr_rate;
        $activity->international_rate = $request->international_rate;
        $activity->currency = $request->currency;
        $activity->rates = $request->rates;
        $activity->commission_amount = $request->commission_amount;
        $activity->gst_tds = $request->gst_tds;

        if ($request->gst_tds == 'gst') {
            $activity->CGST = $request->CGST;
            $activity->SGST = $request->SGST;
            $activity->IGST = $request->IGST;
        } elseif ($request->gst_tds == 'tds') {
            $activity->TDS_percentage = $request->TDS_percentage;
            $activity->TDS_amount = $request->TDS_amount;
        }

        $activity->save();
        return redirect()->route('expert.activities.index')->with('success', 'Activity updated successfully.');
    }

    public function destroy($id)
    {
        $activity = ExpertActivity::find($id);
        $activity->delete();
        return redirect()->back()->with('success', 'Activity deleted successfully.');
    }
}
