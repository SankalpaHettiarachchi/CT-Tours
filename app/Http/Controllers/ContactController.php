<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'active_home' => 'color:#1D231F',
            'active_about' =>'color:#1D231F',    
            'active_gallery' =>'color:#1D231F',    
            'active_contact' =>'color:#63AB45',    
        ];
        return view('Site.contact')->with($data);
    }
}
