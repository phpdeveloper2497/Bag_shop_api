<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return UserResource::collection($user);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
}
