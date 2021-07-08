<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Exception;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = [];
            $account = Account::create($request->all());
            if ($account) {
                $data['status'] = 200;
                $data['bank_name'] = $account->bank_name;
                $data['account_title'] = $account->account_title;
                $data['account_number'] = $account->account_number;

                return response()->json($data);
            } else {
                $data['status'] = 201;
                $data['message'] = "Oops! Cannot create account";
                return response()->json($data);
            }

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }
}
