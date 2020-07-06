<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    protected function redirectTo()
    {
 

        if (Auth::check() && Auth::user()->role == 'Administrator') {
            return ('/Index');
        } elseif (Auth::check() && Auth::user()->role == 'student') {
              
            return ('/Index');
        } else {
            return ('/login');
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
