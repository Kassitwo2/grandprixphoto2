<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Check if the request is from /admin/dashboard
        if ($request->is('admin/dashboard') || $request->is('admin/participations') || $request->is('admin/participations-approuve') ||
            $request->is('admin/participations-refuse') || $request->is('admin/presence-list') || $request->is('admins/navigation')) {
            // Redirect to the admin login page
            return route('admin.login');
        } elseif ($request->is('dashboard')) {
            // Redirect to the regular login page
            return route('login');
        }elseif ($request->is('jury/dashboard')) {
            // Redirect to the regular login page
            return route('jury.login');
        }
    
        return null;
    }
}
