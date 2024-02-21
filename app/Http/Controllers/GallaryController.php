<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
        $data = [
            'active_home' => 'color:#1D231F',
            'active_about' =>'color:#1D231F',    
            'active_gallery' =>'color:#63AB45',    
            'active_contact' =>'color:#1D231F',    
        ];
        return view('Site.gallery')->with($data);
    }
}
