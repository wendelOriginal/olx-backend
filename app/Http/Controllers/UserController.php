<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function sigin(): JsonResponse
    {
        return response()->json(['method'=>'sigin']);
    }



    public function signup(UserRequest $request): JsonResponse
    {
       $data = $request->only('name', 'email', 'password', 'state_id');

       $user = User::create($data);

       $token = $user->createToken("register_token")->plainTextToken;
        return response()->json(['error'=> '', 'token' => $token]);
    }


    public function me(): JsonResponse
    {
        return response()->json(['method'=> 'me']);
    }
}
