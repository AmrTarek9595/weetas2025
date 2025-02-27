<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class TokenAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Extract Bearer Token
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'Unauthorized: No token provided'], 401);
        }

        // Find user by token
        $user = User::where('token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized: Invalid token'], 401);
        }

        // Set authenticated user
        auth()->setUser($user);

        return $next($request);
    }
}
