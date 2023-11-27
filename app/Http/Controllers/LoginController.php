<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
        auth()->attempt(['username'  => $request->username,'password' => $request->password]);
        if (auth()->check()){
            return response(['message' => 'sucessfully logged in'],200);
        }else{
            return response(['message' => 'incorrect data'], 422);
        }
    }
}
