<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Auth;
class SuperadminLoginController extends Controller
{
    public function __construct(){
      $this->middleware('guest:superadmin')->except('superadminLogout');
    }
    public function showLoginForm()
    {
      return view('auth.superadmin-login');
    }
    public function login(Request $request)
    {
        // validating user
        $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|min:6'
        ]);
        // attempt to log the user in
        if(Auth::guard('superadmin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
            return redirect()->route('superadmin.dashboard');
        }
        // if successful, then redirect to their intended location
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function superadminLogout(Request $request)
    {
       
        Auth::guard('superadmin')->logout();
        // return $this->loggedOut($request) ?: redirect('/');
        return redirect()->route('superadmin.login');
    }
}
