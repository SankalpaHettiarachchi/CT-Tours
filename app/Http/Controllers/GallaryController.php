<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
        return view('Site.gallery');
    }
}