<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactEmailController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name'=> 'required',
            'mail'=> 'required|email',
            'comment'=> 'required',
        ],
        
       );

        if ($validator->fails()) 
        {
            Session::flash('error', 'Message Not Sent. Try Again !'); 
            return redirect()->back()->withErrors($validator)->withInput();  
        }
        else
        {
            Mail::to('info@cushyk.com.au')->send(new Contact_Mail($request));
            Session::flash('success', 'Message Sent. Thank You !'); 
            return redirect('/contact_us');
        }
    }
}
