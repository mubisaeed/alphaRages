<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bank;
use App\Models\Client;
use App\Models\Country;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoices.index', get_defined_vars());
    }
    public function create()
    {
        $clients = Client::all();
        $accounts = Account::all();
        $countries = Country::get()->toArray();
        $banks = Bank::get()->toArray();
        return view('invoices.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function rate(Request $request)
    {
        $data = $request->rate * $request->quantity;
        return response()->json($data);
    }
}
