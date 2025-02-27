<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Exception;

class ApiAuthController extends Controller
{
    // **Register API**
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'phone' => 'required|string|max:15|unique:users',
                'birthdate' => 'required|date',
                'role' => 'required|integer|in:1,2,3', // 1 for admin 2 for user 3 for provider
                'gender' => 'required|string|in:male,female',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'birthdate' => $request->birthdate,
                'role' => $request->role,
                'gender' => $request->gender,
            ]);

            return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
        } catch (Exception $e) {
            Log::error('Registration error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong! ' . $e->getMessage()], 500);
        }
    }

    // **Login API**
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if (!Auth::attempt($credentials)) {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }

            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
                'user' => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }

    // **Forgot Password API**
    public function forgotPassword(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email|exists:users,email']);
    
            $status = Password::sendResetLink($request->only('email'));
    
            return response()->json([
                'message' => __($status),
                'status' => $status
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }

    public function logout(Request $request)
{
    try {
        $user = $request->user();
        $user->tokens()->delete(); // Revoke all tokens

        return response()->json(['message' => 'Logged out successfully'], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
    }
}

public function getUserData(Request $request)
{
    return response()->json(['user' => $request->user()], 200);
}


}