<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AController extends Controller
{
    //
    public function createUser(Request $request) {
        $validator = Validator::make($request->all(),[
            'username' => 'required|string|max:20',
            'email' => 'required|email|max:32',
            'password' => 'required|string|max: 32'
        ]);

        if ($validator->fails()) {
            return response() -> json ([
                'status' => 422,
                'accounts' => $validator->messages()
            ], 422);
        } else {
            $account = Accounts::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password 

            ]);

            if ($account) {
                $createdmsg = "Account Added Successfully!";
                return response()->json([
                    'status' => 200,
                    'products' => $createdmsg
                ], 200);
            } else {
                $notcreatedmsg = "Account NOT Added Successfully!";
                return response()->json ([
                    'status' => 500,
                    'accounts' => $notcreatedmsg
                ], 500);
            }
        }
    }

    public function displayAll() {
        $account = Accounts::all();

        if($account->count() > 0 ) {
            return $account;
            } else {
                $errormessage = "Account Not Found!";
                return response()->json([
                    'status' => 404,
                    'account' => $errormessage
                ], 404);
            }
    }
}
