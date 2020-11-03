<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        if(!Auth::check()){
            return redirect()->route('login');
            // can also be written as return redirect(route('login'));
        }
    //role1 = admin
    if(Auth::user()->role==1){
        return $next($request);
    }
    //role2 = contractor
    if(Auth::user()->role==2){
        return redirect()->route('contractor');
    }
    //role3 = customer
    if(Auth::user()->role==3){
        return redirect()->route('customer');
        //return redirect('customer')->with('status','you are not allowed to access this page');
    }
    }
}
