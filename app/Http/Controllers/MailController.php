<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Auth;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Staffs.compose_mail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $html = $request->bodymail;
        $to = $request->tomail;
        $sub = $request->subjectmail;
        $guard = $request->guard;
            
                if(Auth::guard()->check() && $guard=='student'){
                  $from = Auth::guard()->user()->email;
                }
         

         
                elseif(Auth::guard('staff')->check()  && $guard=='staff'){
                  $from = Auth::guard('staff')->user()->email;
               }
          
                elseif(Auth::guard('admin')->check()  && $guard=='admin'){
                  $from = Auth::guard('admin')->user()->email;
                }

                else{
                  $from = Auth::guard('superadmin')->user()->email;
                }
            
     
        // $from = Auth::guard('staff')->user()->email;
        // 
        // Mail::send(['text' =>'Staffs.compose_mail'],['name',Auth::guard('staff')->user()->fname],function($message){

        //     $message->to('g@g.c')->subject('hi');
        // });


        // Mail::raw($request->bodymail, function ($message) use ($to) {
        //           $message->to('g@g.c')
        //             ->subject($to);

        Mail::send(array(), array(), function ($message) use ($html,$to,$sub,$from) {
            $message->to($to)
            ->subject($sub)
            ->from($from)
            ->setBody($html, 'text/html');

        });

    return redirect()->back()->with('message', "Mail Sent Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function student_mail(){
        return view('Students.compose_mail');
    }
    public function admin_mail(){
        return view('Admins.compose_mail');
    }
    public function superadmin_mail(){
        return view('Superadmins.compose_mail');
    }
}
