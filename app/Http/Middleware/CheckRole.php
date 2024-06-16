<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $userRole = Auth::user()->role;

        // Check if user has one of the required roles
        if (in_array($userRole, $roles)) {
            return $next($request);
        }

        // Example: Redirect based on the user's role with a parameter
        $routeParameter = $request->route('id') ?? null; // Adjust this based on your route parameters

        switch ($userRole) {
            case 'Admin':
                return redirect('/admin');
            case 'Superadmin':
                return redirect()->route('admin.dashboard');
            case 'Company':
                return redirect()->route('companie.dashboard');
            default:
                return redirect('/');
        }

        if (Auth::check()) {
            $user = Auth::user();

            // Arahkan berdasarkan role
            if ($user->role == 'company') {
                return redirect('/company-dashboard');
            } elseif ($user->role == 'jobseeker') {
                return redirect('/jobseeker-dashboard');
            }
        }

        return $next($request);
    }

    
}