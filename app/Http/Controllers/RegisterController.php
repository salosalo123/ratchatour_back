<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request){
        $user = User::create($request->validated());
        if ($user){
            return response()->json(['message' => 'successfully created']);
        } else {
            return abort(404);
        }
    }
}
