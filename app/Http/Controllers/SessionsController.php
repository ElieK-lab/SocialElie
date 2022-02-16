<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
class SessionsController extends Controller
{
    public function store(){
       $attributes= request()->validate([
            'email'=>'email|required',//|exists:users,email'
            'password'=>'required'
        ]);
        if (!auth()->attempt($attributes)){
            throw ValidationException::withMessages([
            'email'=>'Yours Credentials Could not be Verified'
        ]);
            /* or:
                return back()
                    ->withInput()
                    ->withErrors(['email'=>'Yours Credentials Could not be Verified']);
             */
        }
        session()->regenerate();//for security from session fixation
        return redirect('/')->with('success','Welcome Back !');

    }
    public function create(){
        return view('session.create');
    }
    public function destroy(){
         auth()->logout();
         return redirect('/')->with('success','GoodBy!');
    }
}
