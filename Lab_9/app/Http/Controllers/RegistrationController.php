<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //

    public function create(){ //page for registering new user

       return view('registration.create');
    }

    public function store(){ //stores user

        //validate the form

        $this->validate(request(), [
                'name' =>'required',
                'email' => 'required|email',
                'password' =>'required|confirmed'
        ]);


        //create and save the user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => \Hash::make(request('password'))
        ]);

        // sign them in

        auth()->login($user);

        // redirect them to home page


       return redirect()->home();
    }
}
