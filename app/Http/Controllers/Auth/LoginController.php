<?php

namespace RATINGapp\Http\Controllers\Auth;
use DB;
use Auth;
use Illuminate\Http\Request;
use RATINGapp\Http\Controllers\Controller;
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
    protected $redirectTo = '/Home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        return view('auth.login');
    }


    public function verify(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

         $checkLogin = DB::table('admins')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin) >0)
        {  
            return view('Admin_area.admin');
            
        }else{
            return view('auth.login');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return view('auth.login');
    }

}