<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class adminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
                

        $isAuthenticatedAdmin = (Auth::check());

        //This will be excecuted if the new authentication fails.
        if (!$isAuthenticatedAdmin){

            return redirect()->route('loginPage')->with('message', 'Authentication Error.');
        }
        return $next($request);
    }
}
