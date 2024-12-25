<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureFilamentUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        // Pastikan user login dan role-nya adalah 'admin' atau 'kolabolator'
        if (auth()->check() && in_array(auth()->user()->role, ['admin', 'kolabolator'])) {
            return $next($request);
        }

        // Kalau user tidak punya akses, lempar error 403
        abort(403, 'Unauthorized access to Filament.');
    }
}
