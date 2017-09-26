<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Users extends Controller
{
    public function signup(){
    return view('new');
    }
    
    public function store(Request $request) {
          $rules = [
          'name' => 'required|max:50',
          'email' => 'required|max:255|regex:/\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/i|unique',
          'password_digest' => 'required|min:6',
          ];
          
          if ($request->password !== $request->password_confirmation) {
              return Redirect::back()
    			->withErrors($validator);
          }
          
          $messages = array(
    		'name.required' => '名前を正しく入力してください。',
    		'name.max' => '名前は50文字以内で入力してください。',
    		'email.required' => 'アドレスを正しく入力してください。',
    		'email.max' => 'アドレスは255文字以内入力してください。',
    		'email.regex' => 'アドレスは正しい形式で入力してください。',
    		'password_digest.required' => 'パスワードを正しく入力してください。',
    		'password_digest.min' => 'パスワードは6文字以上入力してください。',
    	    );
    
            
            $validator = Validator::make($request->all(), $rules, $messages);
            
            if ($validator->passes()) {
    		$user = new User;
    		$user->name = $request->name;
    		$user->email = $request->email;
    		// パスワードハッシュ化
    		$user->password_digest = Hash::make($request->password);
    		$user->save();
    		return redirect('/')
    			->with('message', '投稿が完了しました。');
    	}else{
    		return Redirect::back()
    			->withErrors($validator)
    			->withInput();
    	}
    }
}
