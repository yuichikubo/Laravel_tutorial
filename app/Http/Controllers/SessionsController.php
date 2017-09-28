<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Session;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class SessionsController extends Controller
{
    public function login(){
        return view('sessions.login');
    }
    
    public function dologin(Request $request){
        $credentials = [
		'email'=>$request->email,
		'password'=>$request->password,
	];

        
        $rules = [
          'email' => 'required',
          'password' => 'required',
          ];
          

          $messages = array(
    		'email.required' => 'アドレスを正しく入力してください。',
     		'password.required' => 'パスワードを正しく入力してください。',
    	    );

            $validator = Validator::make($credentials, $rules, $messages);

            if ($validator->passes()) {
        		if (Auth::attempt($credentials)) {
        		    $user = User::where('email', $credentials['email'])->firstOrFail();
        			return redirect()
                        ->action('Users@show', $user->id);
        		}else{
        			return Redirect::back()->withInput();
        		}
        	}else{
        		return Redirect::back()
        			->withErrors($validator)
        			->withInput();
        	}
                
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
