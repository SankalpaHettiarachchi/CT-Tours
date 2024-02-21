<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'active_home' => 'color:#63AB45',
            'active_about' =>'color:#fff',    
            'active_gallery' =>'color:#fff',    
            'active_contact' =>'color:#fff',    
        ];
        return view('Site.home')->with($data);
    }
}
