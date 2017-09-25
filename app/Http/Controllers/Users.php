<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Users extends Controller
{
    function signup(){
    return view('new');
}
}
