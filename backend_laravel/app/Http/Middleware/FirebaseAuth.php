<?php

namespace App\Http\Middleware;

use App\Services\FirebaseService;
use Closure;
use Illuminate\Http\Request;

class FirebaseAuth
{
    public function handle(Request $request, Closure $next)
    {
        $authHeader = $request->header('Authorization');

        if (!$authHeader || !str_starts_with($authHeader, 'Bearer ')) {
            return response()->json(['error' => 'Token ausente ou inválido'], 401);
        }

        $idToken = substr($authHeader, 7);
        $firebase = new FirebaseService();
        $uid = $firebase->getUidFromToken($idToken);

        if (!$uid) {
            return response()->json(['error' => 'Token inválido'], 401);
        }

        $request->merge(['uid' => $uid]);

        return $next($request);
    }
}
