<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getRegistration(){
        return view('pages.registration');
    }

    public function postRegistration(Request $request){
        //dd($request->all());
        $this->validate($request,
            [
                'name'=> 'required|min:3|max:255',
                'email'=> 'required|unique:users,email|email',
                'password'=>'required|min:6|max:255',
                'password_confirmation'=>'required|same:password|min:6|max:255',
                'accept'=>'required',
                'g-recaptcha-response' => ['required', new \App\Rules\ValidRecaptcha]
            ]
        );
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('success');
    }

    public function getSuccess(){
        return view('pages.registrationSuccess');
    }
}
