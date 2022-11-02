<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

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
        if(!Auth::guard('admin')->check()){
            return redirect('/ts-login');
        }
        return $next($request);
    

        // if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->type==('Vendor')) {

        //     return $next($request);
            
        // } else {
        //     return redirect('admin/login');

        //     // return redirect()->route('adminDashboard');
        // }
       



    }
}
