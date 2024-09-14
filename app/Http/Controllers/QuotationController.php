<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuotationMaster;
use App\Models\Expertmaster;
use App\Models\Service;
use App\Models\ExpertService;
use App\Models\ExpertSubService;
use App\Models\ExpertActivity;

class QuotationController extends Controller
{
    public function create(Request $request)
    {
        $lastQuotation = QuotationMaster::latest('created_at')->first();
    $nextNumber = $lastQuotation ? str_pad(substr($lastQuotation->quotation_no, 1) + 1, 4, '0', STR_PAD_LEFT) : '0001';

        $experts = Expertmaster::all();
        $services = Service::all();
        $selectedExpert = null;

        if ($request->has('expert_id')) {
            $selectedExpert = Expertmaster::find($request->expert_id);
        }

        return view('Adminpanel.quotation_create', compact('experts', 'services', 'selectedExpert','nextNumber'));
    }

    public function storeold(Request $request)
    {
        // Validate the required fields
        $request->validate([
            'quotation_no' => 'required|unique:tbl_quotationmaster,quotation_no',
            'date' => 'required',
            'reference_name' => 'required',
            'expert_id' => 'required',
        ]);
        
        // Retrieve the selected expert's details
        $expert = Expertmaster::find($request->expert_id);

        // Create the quotation and save only the relevant details
        QuotationMaster::create([
            'quotation_no' => $request->quotation_no,
            'date' => $request->date,
            'reference_name' => $request->reference_name,
            'expert_id' => $request->expert_id,
            // Additional fields that do not involve fetching from the expert
            // 'company_name' => $expert->company_name, // If needed
        ]);

        // Redirect back to the create quotation page with a success message
        return redirect()->route('quotations.create')->with('success', 'Quotation created successfully.');
    }

  


    public function store(Request $request)
    {
        try {
            $request->validate([
                'quotation_no' => 'required|unique:tbl_quotationmaster,quotation_no',
                'date' => 'required',
                'reference_name' => 'required',
                'expert_id' => 'required',
            ], [
                'quotation_no.unique' => 'The quotation number has already been taken. Please use a different number.',
            ]);
    
            QuotationMaster::create([
                'quotation_no' => $request->quotation_no,
                'date' => $request->date,
                'reference_name' => $request->reference_name,
                'expert_id' => $request->expert_id,
            ]);
    
            return response()->json(['success' => true, 'message' => 'Quotation created successfully.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['success' => false, 'errors' => $e->errors()]);
        }
    }

//     public function getExpertDetails($id)
// {
//     $expert = DB::table('experts')->where('id', $id)->first(); // Adjust the table name and columns as needed

//     if ($expert) {
//         return response()->json([
//             'success' => true,
//             'expert' => $expert
//         ]);
//     } else {
//         return response()->json([
//             'success' => false,
//             'message' => 'Expert not found'
//         ]);
//     }
// }


public function getExpertDetailssss($id)
{
    $expert = Expertmaster::find($id);

    if (!$expert) {
        return response()->json([
            'success' => false,
            'message' => 'Expert not found.'
        ]);
    }

    return response()->json([
        'success' => true,
        'expert' => $expert
    ]);
}
public function getExpertDetails($expertId)
{
    // Fetch the expert details
    $expert = Expertmaster::find($expertId);

    // Check if expert was found
    if (!$expert) {
        return response()->json(['success' => false, 'message' => 'Expert not found']);
    }

    // Fetch services associated with the selected expert
    $services = ExpertService::where('Expertmaster_IDF', $expertId)->get();

    

    return response()->json([
        'success' => true,
        'expert' => $expert,
        'services' => $services
    ]);
}
// public function getSubServices($serviceId)
// {
//     // Fetch sub-services based on the selected service
//     $subServices = SubService::where('ServiceMaster_IDF', $serviceId)->get();

//     return response()->json([
//         'success' => true,
//         'subServices' => $subServices
//     ]);
// }

public function getSubServices($expertId, $expertServiceId)
{
    // Fetch sub-services associated with the selected expert and service
    $subServices = ExpertSubService::where('ExpertService_IDF', $expertServiceId)
                                    ->where('Expertmaster_IDF', $expertId)
                                    ->get();

    return response()->json([
        'success' => true,
        'subServices' => $subServices
    ]);
}

public function getActivities(Request $request)
{
    $expertServiceId = $request->input('expert_service_id');
    $expertSubServiceId = $request->input('expert_sub_service_id');
    $expertId = $request->input('expert_id');

    // Fetch activities based on the provided service, sub-service, and expert IDs
    $activities = ExpertActivity::where('ExpertService_IDF', $expertServiceId)
        ->where('ExpertSubService_IDF', $expertSubServiceId)
        ->where('Expertmaster_IDF', $expertId)
        ->get();

    return response()->json(['success' => true, 'activities' => $activities]);
}




public function storeQuotation(Request $request)
{
    // Validate the required fields
    $request->validate([
        'quotation_no' => 'required|unique:tbl_quotationmaster,quotation_no',
        'date' => 'required',
        'reference_name' => 'required',
        'expert_id' => 'required',
    ]);

    // Retrieve the selected expert's details
    $expert = Expertmaster::find($request->expert_id);

    if (!$expert) {
        return response()->json([
            'success' => false,
            'message' => 'Expert not found.'
        ]);
    }

    // Create the quotation and save only the relevant details
    QuotationMaster::create([
        'quotation_no' => $request->quotation_no,
        'date' => $request->date,
        'reference_name' => $request->reference_name,
        'expert_id' => $request->expert_id,
    ]);

    // Return a JSON response indicating success
    return response()->json([
        'success' => true,
        'message' => 'Quotation created successfully.'
    ]);
}
// In your QuotationsController or the relevant controller



}