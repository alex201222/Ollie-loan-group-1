<?php

namespace App\Http\Controllers;

use App\Mail\ContactReportMail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(Request $request){
      $request->validate([
            'email' => ['required','min:10','email'],
            'name' => ['required','min:3'],
            'subject' => ['required','min:4'],
            'message' => ['required','min:10'],
      ]);

      $user=$request->input('email');
      Mail::to($user)->send(new WelcomeMail($request->input()));
      Mail::to('ollieafricaman001@gmail.com')->send(new ContactReportMail($request->input()));
      
       return redirect()->back()->with("success","Your datails have been submitted successfully");
    }

    public function newsletter(Request $request){
      $request->validate([
            'email' => ['required','min:10','email'],
            'name' => ['required','min:3'],
      ]);


       return redirect()->back()->with("success","Your datails have been submitted successfully");
    }
}
