<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class Static_page extends Controller
{
    function home(){
    if (Auth::user()){
    $user = Auth::user();
    return view('static_pages.home')
    ->with('user', $user);
    }else{
    return view('static_pages.home');
    }
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
