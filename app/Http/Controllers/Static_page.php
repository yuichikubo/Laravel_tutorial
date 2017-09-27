<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Static_page extends Controller
{
    function home(){
    return view('static_pages.home');
}

    function about(){
    return view('static_pages.about');
}

    function contact(){
    return view('static_pages.contact');
}

    function help(){
    return view('static_pages.help');
}
    
}
