<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function welcome()
    {
        return view('welcome'); 
    }
    public function about()
    {
        return view('pages.about'); 
    }
    public function services()
    {
        return view('pages.services'); 
    }
    public function pricing()
    {
        return view('pages.pricing'); 
    }
    public function contact()
    {
        return view('pages.contact'); 
    }
}
