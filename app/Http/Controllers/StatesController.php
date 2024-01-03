<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\State;

class StatesController extends Controller
{
    //

    public function index(Request $request): JsonResponse
    {
        $data = State::all();
        return response()->json(['data'=> $data]);
    }

}
