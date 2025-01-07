<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->hak_akses === $role) {
            return $next($request);
        }

        return abort(403, 'Unauthorized access');
    }
}
