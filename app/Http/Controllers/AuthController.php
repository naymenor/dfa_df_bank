<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\userRole;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        $validate = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if ($validate->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validate->errors()
            ], 422);
        }
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid login details'], 401);
        }

        //$user = User::where('email', $request->email)->firstOrFail();

        
        $user = Auth::user();
        $token = $user->createToken('API Token')->plainTextToken;
        $userRole = $user->role->role_name;

        return response()->json(['token' => $token, 'id' => $user->id, 'user_role' => $userRole], 200);
    }
}
