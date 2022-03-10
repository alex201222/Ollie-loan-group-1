<?php

namespace App\Http\Controllers;

use App\Mail\AuthtestMail;
use App\Mail\LoanApplicationMail;
use App\Mail\LoanApplicationReportMail;
use App\Models\Form;
use App\Models\User;
use Carbon\Carbon;
use CreateUsersTable;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia('Forms/Form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $loanid = random_int(84000000,85000000);

        User::create([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'id_number'=>$request->input('password'),
            'phone_number'=>$request->input('phone_number'),
            'gender'=>$request->input('gender'),
            'date_of_birth'=>$request->input('date_of_birth'),

            'principal'=>$request->input('principal'),
            'months'=>$request->input('months'),
            'use'=>$request->input('use'),
            'postal_code'=>$request->input('postal_code'),
            'village_estate'=>$request->input('village_estate'),
            'city'=>$request->input('city'),
            'country'=>$request->input('country'),
            'promo_code'=>$request->input('promo_code'),

            'totalinterest'=>$request->input('totalinterest'),
            'deposit'=>$request->input('deposit'),
            'totalpayment'=>$request->input('totalpayment'),
            'duedate'=>$request->input('duedate'),
            'monthlypayment'=>$request->input('monthlypayment'),

            'loan_id'=>$loanid,
            
        ]);
           $user=$request->input('email');
        Mail::to($user)->send(new LoanApplicationMail($request->input(),$loanid));
        Mail::to('ollieafricaman001@gmail.com')->send(new LoanApplicationReportMail($request->input()));
       
          
        return Redirect::route('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
