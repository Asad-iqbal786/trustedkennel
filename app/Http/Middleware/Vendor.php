<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Vendor
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
        // if(!Auth::guard('vendor')->check()){
        //     return redirect('/ts-login');
        // }
        // return $next($request);
    
        if (Auth::guard('vendor')->check()) {

            return $next($request);

        } else {
            
            return redirect('/ts-login');
            // return redirect()->route('adminDashboard');
            
        }
    


    }
}
