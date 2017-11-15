<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    //

    public function create(){ //page for registering new user

       return view('registration.create');
    }

    public function store(RegistrationRequest $request){ //stores user

        $request->persist();

            session()->flash('message','Thank you for signing up!');

        return redirect()->home();
    }
}
