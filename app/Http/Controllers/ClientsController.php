<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        try {
            $data = [];
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:clients,email',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

//            $client = new Client;
//            $client->company_name = $request->company_name;
//            $client->first_name = $request->first_name;
//            $client->last_name = $request->last_name;
//            $client->email = $request->email;
//            $client->country = $request->country;
//            $client->address1 = $request->address1;
//            $client->address2 = $request->address2;
//            $client->phone = $request->phone;
//            $client->save();
//            $client = Client::create([
//                'company_name' => $request->company_name,
//                'first_name' => $request->first_name,
//                'last_name' => $request->last_name,
//                'email' => $request->email,
//                'country' => $request->country,
//                'address1' => $request->address1,
//                'address2' => $request->address2,
//                'phone' => $request->phone,
//            ]);
            $client = Client::create($request->all());
            if ($client) {
                $data['status'] = 200;
                $data['company_name'] = $client->company_name;
                $data['first_name'] = $client->first_name;
                $data['last_name'] = $client->last_name;
                $data['full_name'] = $client->FullName;
                $data['email'] = $client->company_name;
                $data['address1'] = $client->address1;
                $data['address2'] = $client->address2;
                $data['country'] = $client->country;
                $data['phone'] = $client->phone;
                return response()->json($data);
            } else {
                $data['status'] = 201;
                $data['message'] = "Oops! Cannot create client";
                return response()->json($data);
            }

//            return redirect()->back()->with('success', 'Client Created successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function show($id)
    {
        try {
            $data = Client::whereId($id)->first();
            if ($data) {
                $data['status'] = 200;
                return response()->json($data);
            } else {
                $data['status'] = 201;
                $data['message'] = "Oops! Something went wrong";
                return response()->json($data);
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
