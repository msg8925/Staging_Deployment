<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    // 
    public function index(): JsonResponse
    {
        $users = User::all(); // Retrieve all users

        return response()->json([
            'data' => $users,
            'message' => 'Users retrieved successfully',
        ], 200);
    }
}
