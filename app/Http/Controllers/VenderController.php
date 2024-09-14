<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VenderController extends Controller
{
    public function venderList(Request $request)
    {
        // Fetch expert data from the tbl_expertmaster table
        $experts = DB::table('tbl_expertmaster')
                    ->select('first_name', 'last_name', 'email', 'phone', 'registered_address', 'city', 'country', 'company_name')
                    ->get();

        // Pass the expert data to the view
        return view('Adminpanel.vender_list', compact('experts'));
    }
}
