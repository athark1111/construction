<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
        
        if(Auth::user()->role==1){
            
            redirect()->setIntendedUrl(url('/admin'));
            
    }

    if(Auth::user()->role==2){
        
        redirect()->setIntendedUrl(url('/contractor'));

                             }

if(Auth::user()->role==3){
        
    redirect()->setIntendedUrl(url('/customer'));  
    //$this->redirectTo= '/customer';
    // return 'customer';
    
                        }
            

           
        }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
