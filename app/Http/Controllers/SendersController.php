<?php

namespace App\Http\Controllers;

use App\Models\Sender;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SendersController extends Controller
{
    public function store(Request $request)
    {
        dd('fsadf');
//        try {
//        $data = [];
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|email|unique:sender,email',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect()->back()->with('error', $validator->errors()->first());
//        }
//
//        $sender = Sender::create($request->all());
//        if($sender) {
//            $data['status'] = 200;
//            $data['sender_name'] = $sender->name;
//            $data['sender_email'] = $sender->email;
//            $data['sender_address1'] = $sender->address1;
//            $data['sender_address2'] = $sender->address2;
//            $data['sender_country'] = $sender->country;
//            $data['sender_phone'] = $sender->phone;
//            $data['sender_website'] = $sender->website;
//            $data['sender_tax'] = $sender->registration_number;
//            return response()->json($data);
//        } else {
//            $data['status'] = 201;
//            $data['message'] = "Oops! Cannot create set sender";
//            return response()->json($data);
//        }
//
//    } catch (Exception $e) {
//        return redirect()->back()->with('error', $e->getMessage())->withInput();
//        }
    }

}
