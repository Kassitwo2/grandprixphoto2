<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckProfileCompletion
{
    /**
     * Handle an incoming request.
     *it didnt work 

     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    


     public function handle($request, Closure $next)
     {
         $user = Auth::user();
 
         if ($user && $user->is_complete == 1)  {
             return $next($request);
         }
 
         return redirect()->route('profile.completeProfile');
     }
}
