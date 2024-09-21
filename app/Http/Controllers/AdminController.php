<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Include Hash facade for hashing passwords
use App\Models\Admin;
use App\Models\User;
use App\Models\Company;
use App\Models\Companydetails;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    // Show the admin login form
    public function admin()
    {
        return view('admin');
    }

    // Handle admin login
    public function adminlogin(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Get credentials from the request
        $credentials = $request->only('email','password');

        // Attempt to authenticate the admin
        if (Auth::guard('admin')->attempt($credentials)) {
            // Redirect to the admin homepage if authentication is successful
            return redirect('/adminhomepage');
        } else {
            // Redirect back with error message if authentication fails
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    // Show the admin homepage
    public function adminhomepage()
    {
        return view('adminhome');
    }

    public function addcompany1()
    {
        return view('companyadd');
    }
    public function viewuser1()
    {
        $users = User::all();
        return view('userlist', compact('users'));
    }
    public function deluser(Request $request, $id)
{
   $user= User::find($id);
   $user->delete();
   return redirect('/viewuser');
}
public function edit(Request $request, $id)
{
   $user= User::find($id);
  
   return view('edituser',compact('user'));


}

public function updates(Request $request, $id)
{
$user= User::find($id);
$user->update([
    'firstname'=>$request->input('firstname'),
    'lastname'=>$request->input('lastname'),
    'email'=>$request->input('email'),
    'phonenumber'=>$request->input('phonenumber'),
    'password'=>$request->input('password')

]);
return redirect('viewuser');


}
public function viewcompanys(Request $request, $id)
{
   $user= Company::find($id);
  
   return view('edituser',compact('user'));


}
public function registercompany1(Request $request)
{
 $users= Companydetails::create([
        'companyname'=>$request->companyname,
        'email'=>$request->email,
        'phonenumber'=>$request->phonenumber,
        'password'=>$request->password,
     ]);





}

}