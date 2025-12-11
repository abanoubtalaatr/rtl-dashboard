<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated
        if (! Auth::check()) {
            return redirect()->route('login')->with('error', 'يجب تسجيل الدخول للوصول لهذه الصفحة.');
        }

        // Check if user is super admin
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (! $user->isSuperAdmin()) {
            abort(403, 'عذراً، هذه الصفحة متاحة فقط للمدير العام (Super Admin).');
        }

        return $next($request);
    }
}
