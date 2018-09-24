<?php

namespace App\Http\Middleware\SuperAdmin;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdminGuestSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/superadmin/home');
        }
        return $next($request);
    }
}
