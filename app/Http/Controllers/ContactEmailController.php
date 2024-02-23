<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact_Mail;


class ContactEmailController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name'=> 'required',
            'phone_number'=> 'required',
            'email'=> 'required|email',
            'message'=> 'required',
        ],
        
       );

        if ($validator->fails()) 
        {
            Session::flash('error', 'Message Not Sent. Try Again !'); 
            return redirect()->back()->withErrors($validator)->withInput();  
        }
        else
        {
            Mail::to('info@cttravelsandtours.com')->send(new Contact_Mail($request));
            Session::flash('success', 'Message Sent. Thank You !'); 
            return redirect('/contact');
        }
    }
}
