<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Static_page extends Controller
{
    function home(){
    return view('home');
}

    function about(){
    return view('about');
}

    function contact(){
    return view('contact');
}

    function help(){
    return view('help');
}
    
}
