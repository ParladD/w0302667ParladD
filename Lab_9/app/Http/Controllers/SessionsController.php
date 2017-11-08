<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //constructor to see if user is already signed in

    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }


    //
    public function create(){

        return view('sessions.create');
    }//login page for user



    public function store(){

        //if attempt to login fails than return them back to sing in page
       if(!auth()->attempt(request(['email','password']))){

          return back()->withErrors([

              'message' => 'Invalid login, Please try again'
          ]);
       }

       //else they successfully logged in so return them to the home page

        return redirect()->home();

    }//login user



    public function destroy(){

        auth()->logout();

        return redirect()->home();
    }//logout user


}
