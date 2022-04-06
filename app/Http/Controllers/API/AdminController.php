<?php

namespace App\Http\Controllers\API;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login()
    {
        $admin = Admin::where('email', request()->input('email'))->first();

        if ($admin) 
        {

            if (Hash::check(request()->input('password'), $admin->password)) {
                $token = $admin->createToken('Laravel Password Grant Client')->accessToken;

                return $this->respondWithToken($token);
            }
            else 
            {
                $response = ["message" => "Password mismatch"];

                return response($response, 422);
            }
        } 
        else 
        {
            $response = ["message" =>'Admin does not exist'];

            return response($response, 422);
        }
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password'=>'required|min:6'
        ]);

        $admin = Admin::create($data);

        return $this->login($admin);
    }

    public function myProfile()
    {
       return auth('admin')->user();
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
        ]);
    }
}
