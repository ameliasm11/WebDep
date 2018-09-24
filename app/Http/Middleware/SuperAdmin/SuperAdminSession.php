<?php

namespace App\Http\Middleware\SuperAdmin;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdminSession
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
        if (!Auth::guard('superadmin')->check()) {
            return redirect('/superadmin/login');
        }
        return $next($request);
    }
}
