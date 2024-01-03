<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiginRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function sigin(SiginRequest $request): JsonResponse
    {
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)){
            $user = Auth::user();
            $response = [
                'error'=> '',
                'token' => $user->createToken('login_token')->plainTextToken
            ];
        return response()->json($response);
        }else{

            return response()->json(['error'=>'E-mail ou senha invalidos verifique e tente novamente !']);
        }

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

        $user = Auth::user();


        $response = [
            'user'=> $user->only(['name', 'email']),
            'state'=> User::find($user->id)->state->only(['name']),
            'ads'=> User::find($user->id)->advertase
        ];
        return response()->json($response);
    }
}
