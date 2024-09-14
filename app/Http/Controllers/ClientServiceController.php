<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Subservice;
use App\Models\Activity;

class ClientServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('client.get_client', compact('services'));
    }

    public function getSubservices($service_id)
    {
        $subservices = Subservice::where('ServiceMasterIDP', $service_id)->get();
        return response()->json($subservices);
    }

    public function getActivities($subservice_id)
    {
        $activities = Activity::where('subservice_idf', $subservice_id)->get();
        return response()->json($activities);
    }
}
