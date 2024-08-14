<?php

namespace App\Http\Controllers;

use App\Http\Resources\MeResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
         $token = $user->createToken($request->email)->plainTextToken;
        return response()->json([
            "message" => "Token created successfully",
            "token" => $token
        ]);
    }

    public function register(){

    }

    public function me(Request $request)
    {

        return new MeResource($request->user());
    }
}
