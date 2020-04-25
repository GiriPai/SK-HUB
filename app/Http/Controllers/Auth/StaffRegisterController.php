<?php

namespace App\Http\Controllers\Auth;

use App\Models\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class StaffRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/staff';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.staff-register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    //
    // }

    public function register(Request $request)
    {
      if($request->password === $request->password2)
      {
          $s = new Staff();
          $s->department_id = $request->department_id;
          $s->roll_no = $request->reg_no;
          $s->fname = $request->fname;
          $s->lname = $request->lname;
          $s->degree = $request->degree;
          $s->designation = $request->designation;
          $s->experience = $request->exp;
          $s->email = $request->email;
          $s->password = Hash::make($request->password);
          $s->address = $request->address;
          $s->city = $request->city;
          $s->zip = $request->zip;
          $s->phone = $request->phone;
          $s->bio = $request->bio;
          $s->status = '1';
          if($request->hasFile('pic'))
          {
              $pic = $request->reg_no;
              $pic = $pic.'.jpg';
              $path =  $request->file('pic')->storeAs('public/profile',$pic);
              $s->pic = $path;
          }else {
              $s->pic = "public/profile/staff_avatar.jpg";
          }
          $s->save();
          return redirect()->route('staff.login')->with("status", "You have registered successfully");
      }   
      else
      {
            return redirect()->route('staff.register')->with("status", "Password missmatch");
      }




      return $request;
      // $name = $request->fname;
      // $name = $name.'.jpg';


      // $this->validator($request->all())->validate();


    }
}
