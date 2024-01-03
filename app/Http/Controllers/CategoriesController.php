<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    //
    public function index(Request $request): JsonResponse
    {
        $data = Category::all();

        return response()->json(['data'=> $data]);
    }
}
