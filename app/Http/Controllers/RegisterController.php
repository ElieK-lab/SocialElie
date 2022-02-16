<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
         //return request()->all();    //return the data which entries in the form and send it to POST request
        $attributes =  request()->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|max:255|min:4|unique:users,username',
            //wehn we use array formate we have to do this: Rule::uinque('users','username')
            'email' => 'required|email|unique:users,email',
            'password' => ['required','min:8'],
        ]);//if that validation failed laravel will redirect to previous page

        $user=User::create($attributes);
        auth()->login($user);
        //session()->flash('success','Your Account Has been created');
        return redirect('/')->with('success','Your Account Has been created');
    }
}
