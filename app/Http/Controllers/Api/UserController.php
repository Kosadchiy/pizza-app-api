<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUser;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller 
{
    public function user()
    {
        return Auth::user();
    }

    public function register(RegisterUser $request) 
    {
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        return response()->json($user); 
    }
}