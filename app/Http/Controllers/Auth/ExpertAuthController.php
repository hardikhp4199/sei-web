<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Expertmaster;
use App\Models\Service;
use App\Models\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ExpertAuthController extends Controller
{

    public function expert_profile(Request $request)
{
    $services = Service::all();
    $subservices = Subservice::all();
    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    // Pass the expert, services, and subservices to the view
    return view('Expertpanel.expert_profile', compact('expert', 'services', 'subservices'));
}

    public function getExpertDetails(Request $request)
{
    $expert = ExpertMaster::where('expert_name', $request->expert_name)->first();

    if ($expert) {
        return response()->json($expert);
    } else {
        return response()->json(['error' => 'Expert not found'], 404);
    }
}

    public function showRegisterForm()
    {
        return view('Expertpanel.expertsignup');
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:tbl_expertmaster,email',
            'phone' => 'required|string|max:15|unique:tbl_expertmaster,phone',
            'city' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Expertmaster::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'password' => Hash::make('default_password'), // Assign a default password or handle password input
        ]);

        return redirect()->route('expert.login')->with('success', 'Registration successful. Please login.');
    }

    public function showLogin()
    {
        return view('Expertpanel.expertlogin');
    }

    public function loginForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string',
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'phone');
        $expert = Expertmaster::where($credentials)->first();

        if ($expert) {
            Auth::guard('expert')->login($expert);

            session([
                'first_name' => $expert->first_name,
                'last_name' => $expert->last_name, 
            ]);
            
            return redirect()->route('expert.index');
        }

        return redirect()->back()->withErrors(['phone' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::guard('expert')->logout();
        return redirect()->route('expert.login');
    }

    public function index()
    {
        return view('Expertpanel.index');
    }
    // Personal Details
public function showPersonalDetails()
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    return view('expertpanel.expertpersonaldetails.index', compact('expert'));
}

public function updatePersonalDetails(Request $request)
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::find($userId);


    // $expert = Expertmaster::where('Expertmaster_IDP', $expertmaster_idp)->first();

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    $request->validate([
        'legal_name' => 'required|string|max:255',
        'pan_no' => 'required|string|max:255',
        'registered_address' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'licenses' => 'required|string|max:255',
    ]);

    $expert->update($request->only(['legal_name', 'pan_no', 'registered_address', 'country', 'licenses']));

    return redirect()->route('expert.profile')->with('success', 'Personal details updated successfully.');
} 

public function storePersonalDetails(Request $request)
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'legal_name' => 'required|string|max:255',
        'pan_no' => 'required|string|max:255',
        'registered_address' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'licenses' => 'required|string|max:255',
    ]);

    $expert->update($validatedData);

    return redirect()->route('expertpersonaldetails.show')->with('success', 'Personal details saved successfully.');
}

public function editPersonalDetails()
    {
        if (!Auth::guard('expert')->check()) {
            return redirect()->route('expert.login')->withErrors('You need to login first.');
        }

        $userId = Auth::guard('expert')->id();
        $expert = Expertmaster::find($userId);

        if (!$expert) {
            return redirect()->route('expert.login')->withErrors('User not found.');
        }

        return view('Expertpanel.expertpersonaldetails.edit', compact('expert'));
    }

    // Bank Details
    public function showBankDetails()
    { 
       
        if (!Auth::guard('expert')->check()) {
            return redirect()->route('expert.login')->withErrors('You need to login first.');
        }

        $userId = Auth::guard('expert')->id();
        $expert = Expertmaster::find($userId);

        if (!$expert) {
            return redirect()->route('expert.login')->withErrors('User not found.');
        }

        return view('expertpanel.bankdetails.index', compact('expert'));
    }

    public function editBankDetails()
    {
        if (!Auth::guard('expert')->check()) {
            return redirect()->route('expert.login')->withErrors('You need to login first.');
        }

        $userId = Auth::guard('expert')->id();
        $expert = Expertmaster::find($userId);

        if (!$expert) {
            return redirect()->route('expert.login')->withErrors('User not found.');
        }

        return view('expertpanel.bankdetails.edit', compact('expert'));
    }

    public function updateBankDetails(Request $request)
    {
       
        if (!Auth::guard('expert')->check()) {
            return redirect()->route('expert.login')->withErrors('You need to login first.');
        }

        $userId = Auth::guard('expert')->id();
        $expert = Expertmaster::find($userId);

        if (!$expert) {
            return redirect()->route('expert.login')->withErrors('User not found.');
        }

        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:255',
        ]);

        $expert->update($request->only(['bank_name', 'account_name', 'ifsc_code']));
       
        return redirect()->route('expert.profile')->with('success', 'Bank details updated successfully.');
    }

    public function storeBankDetails(Request $request)
    {
        if (!Auth::guard('expert')->check()) {
            return redirect()->route('expert.login')->withErrors('You need to login first.');
        }

        $userId = Auth::guard('expert')->id();
        $expert = Expertmaster::find($userId);

        if (!$expert) {
            return redirect()->route('expert.login')->withErrors('User not found.');
        }

        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:255',
        ]);

        $expert->update($request->only(['bank_name', 'account_name', 'ifsc_code']));

        return redirect()->route('bankdetails.show')->with('success', 'Bank details saved successfully.');
    }
    

    // Company Details
    public function showCompanyDetails()
    {
        if (!Auth::guard('expert')->check()) {
            return redirect()->route('expert.login')->withErrors('You need to login first.');
        }
    
        $userId = Auth::guard('expert')->id();
        $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();
    
        if (!$expert) {
            return redirect()->route('expert.login')->withErrors('User not found.');
        }
    
        return view('expertpanel.companydetails.index', compact('expert'));
    }

    public function editCompanyDetails()
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::find($userId);

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    return view('expertpanel.companydetails.edit', compact('expert'));
}
    
public function updateCompanyDetails(Request $request)
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::find($userId);

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    $request->validate([
        'company_name' => 'required|string|max:255',
        'location_of_business' => 'required|string|max:255',
        'gst_no' => 'required|string|max:255',
        'nature_of_business' => 'required|string|max:255',
        'types_of_firm' => 'required|string|max:255',
        'year_of_incorporation' => 'required|integer|min:1900|max:'.date('Y'),
        'no_of_employees' => 'required|integer|min:1',
        'last_3_years_annual_turnover' => 'required|string|max:255',
    ]);

    $expert->update($request->only([
        'company_name',
        'location_of_business',
        'gst_no',
        'nature_of_business',
        'types_of_firm',
        'year_of_incorporation',
        'no_of_employees',
        'last_3_years_annual_turnover'
    ]));

    return redirect()->route('expert.profile')->with('success', 'Company details updated successfully.');

}
    
    public function storeCompanyDetails(Request $request)
    {
        if (!Auth::guard('expert')->check()) {
            return redirect()->route('expert.login')->withErrors('You need to login first.');
        }
    
        $userId = Auth::guard('expert')->id();
        $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();
    
        if (!$expert) {
            return redirect()->route('expert.login')->withErrors('User not found.');
        }
    
        $request->validate([
            'company_name' => 'required|string|max:255',
            'location_of_business' => 'required|string|max:255',
            'gst_no' => 'required|string|max:255',
            'nature_of_business' => 'required|string|max:255',
            'types_of_firm' => 'required|string|max:255',
            'year_of_incorporation' => 'required|integer|min:1900|max:'.date('Y'),
            'no_of_employees' => 'required|integer|min:1',
            'last_3_years_annual_turnover' => 'required|string|max:255',
        ]);
    
        $expert->update($request->only([
            'company_name',
            'location_of_business',
            'gst_no',
            'nature_of_business',
            'types_of_firm',
            'year_of_incorporation',
            'no_of_employees',
            'last_3_years_annual_turnover'
        ]));
    
        return redirect()->route('companydetails.show')->with('success', 'Company details saved successfully.');
    }

  // Service Details
public function showServiceDetails()
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $services = Service::all();
    $subservices = Subservice::all();

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    return view('expertpanel.servicedetails.index', compact('expert', 'services', 'subservices'));
}

public function updateServiceDetails(Request $request)
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();

    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    $request->validate([
        'service' => 'required|integer|exists:tbservicemaster,ServiceMasterIDP',
        'subservice' => 'required|integer|exists:tbl_subservice,SubService_IDP',
        'activities' => 'required|string|max:255',
        'each_activity_with_qty_unit' => 'required|string|max:255',
        'estimate_time' => 'required|integer',
        'inr_rate' => 'required|numeric',
        'international_rate' => 'required|numeric',
        'currency' => 'required|string|max:255',
        'rates' => 'required|string|max:255',
        'commission_amount' => 'required|numeric',
        'gst_tds' => 'required|string|max:255',
        'CGST' => 'nullable|numeric',
        'SGST' => 'nullable|numeric',
        'IGST' => 'nullable|numeric',
        'TDS_percentage' => 'nullable|numeric',
        'TDS_amount' => 'nullable|numeric',
    ]);

    $data = $request->only([
        'service', 
        'subservice', 
        'activities', 
        'each_activity_with_qty_unit', 
        'estimate_time', 
        'inr_rate', 
        'international_rate', 
        'currency', 
        'rates', 
        'commission_amount', 
        'gst_tds',
        'CGST',
        'SGST',
        'IGST',
        'TDS_percentage',
        'TDS_amount'
    ]);

    $expert->update($data);

    return redirect()->route('expertservice.show')->with('success', 'Service details updated successfully.');
}

public function storeServiceDetails(Request $request)
{
    if (!Auth::guard('expert')->check()) {
        return redirect()->route('expert.login')->withErrors('You need to login first.');
    }

    $userId = Auth::guard('expert')->id();
    $expert = Expertmaster::where('Expertmaster_IDP', $userId)->first();
    
    if (!$expert) {
        return redirect()->route('expert.login')->withErrors('User not found.');
    }

    $request->validate([
        'service' => 'required|integer|exists:tbservicemaster,ServiceMasterIDP',
        'subservice' => 'required|integer|exists:tbl_subservice,SubService_IDP',
        'activities' => 'required|string|max:255',
        'each_activity_with_qty_unit' => 'required|string|max:255',
        'estimate_time' => 'required|integer',
        'inr_rate' => 'required|numeric',
        'international_rate' => 'required|numeric',
        'currency' => 'required|string|max:255',
        'rates' => 'required|string|max:255',
        'commission_amount' => 'required|numeric',
        'gst_tds' => 'required|string|max:255',
        'CGST' => 'nullable|numeric',
        'SGST' => 'nullable|numeric',
        'IGST' => 'nullable|numeric',
        'TDS_percentage' => 'nullable|numeric',
        'TDS_amount' => 'nullable|numeric',
    ]);

    $data = $request->only([
        'service', 
        'subservice', 
        'activities', 
        'each_activity_with_qty_unit', 
        'estimate_time', 
        'inr_rate', 
        'international_rate', 
        'currency', 
        'rates', 
        'commission_amount', 
        'gst_tds',
        'CGST',
        'SGST',
        'IGST',
        'TDS_percentage',
        'TDS_amount'
    ]);

    $expert->update($data);

    return redirect()->route('expertservice.show')->with('success', 'Service details saved successfully.');
}

public function fetchSubservices($serviceId)
{
    $subservices = Subservice::where('ServiceM_IDF', $serviceId)->get();
    return response()->json($subservices);
}

}
