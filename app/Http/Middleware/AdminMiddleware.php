<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role == User::ROLE_ADMIN) {
            return $next($request);
        }

        abort(401);
    }
}
