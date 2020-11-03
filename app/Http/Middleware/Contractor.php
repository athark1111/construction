<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Contractor
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
        }
    //role1 = admin
    elseif(Auth::user()->role==1){
        
        return redirect()->route('contractor');
    }
    //role2 = contractor
    if(Auth::user()->role==2){
        return $next($request);
    }
   
    //role3 = customer
    elseif(Auth::user()->role==3){
        return redirect()->route('customer');
    }
  else
    {return back();}
    }
}
