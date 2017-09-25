<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Static_page extends Controller
{
    function home(){
    return view('home');
}
    
}
