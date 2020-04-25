<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class StaffLoginController extends Controller
{
    public function __construct(){
      $this->middleware('guest:staff')->except('staffLogout');
    }
    public function showLoginForm()
    {
      return view('auth.staff-login');
    }
    public function login(Request $request)
    {
        //validating user
        $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|min:6'
        ]);
        //attempt to log the user in
        if(Auth::guard('staff')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
            return redirect()->intended(route('staff.dashboard'));
        }

        //if successful, then redirect to their intended location
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function staffLogout(Request $request)
    {
        Auth::guard('staff')->logout();
        // return $this->loggedOut($request) ?: redirect('/');
        return redirect()->route('staff.login');
    }
}
