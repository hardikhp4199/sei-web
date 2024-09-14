<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClinetListController extends Controller
{
    public function clientList(Request $request)
    {
        // Fetch client data from the clientlogindata table
        $clients = DB::table('clientlogindata')
                    ->select('clientIDP', 'username', 'email')
                    ->get();

        // Pass the client data to the view
        return view('Adminpanel.client_list', compact('clients'));
    }
}
