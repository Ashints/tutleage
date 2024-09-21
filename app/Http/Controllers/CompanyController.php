<?php

namespace App\Http\Controllers;
use App\Mail\RegistrationMail;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{

       public function company1()
       {
           return view('companyreg');
       }

    public function details(Request $request)
    {
     $users= Company::create([
            'companyname'=>$request->companyname,
            'companyregistrationnumber'=>$request->companyregistrationnumber,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'location'=>$request->location,
            'pincode'=>$request->pincode,
            'description'=>$request->description,
         
     ]);
        

        $details = [
              'companyname' => $request->companyname,
              'email' => $request->email,
              'phonenumber' => $request->phonenumber,
          ];
      
          $adminEmail = env('ADMIN_EMAIL'); // Fetch the admin email from .env
    Mail::to($adminEmail)->send(new RegistrationMail($details));

    return redirect('/company')->with('message','successfully registered');
}




}