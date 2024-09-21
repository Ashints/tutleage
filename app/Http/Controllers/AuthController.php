<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
public function firstpage()
{
    return view('demo-cream-app');
}

public function loginregist()
{
    return view('loginreg');
}

public function loginregist1()
{
    return view('loginreg1');
}
public function user()
{
    return view('user');
}
public function register()
{
    return view('register');
}

    public function store(Request $request)
    {
     $users= User::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'password'=>$request->password
         
     ]);
        return redirect('/user');
}
    public function login(Request $request)
    {
    
    
        $request->validate([
            'email'=>'required | email',
            'password'=>'required'
        ]);
        $credentials = $request->only('email','password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect('/homepage');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
        }
     public function home()
{
    return view('homepage');
}


    }
