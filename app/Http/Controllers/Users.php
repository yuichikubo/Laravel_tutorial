<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
use Hash;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class Users extends Controller
{
    public function create(){
    return view('users.create');
    }
    
    public function show($id){
        $user = User::findOrFail($id);
        if(Auth::user()->id == $user->id){
        return view('users.show')->with('user', $user);
        } else {
        return Redirect::back()
            			->withErrors("閲覧権限がありません。");
        }
    }
    
    public function store(Request $request) {
          $rules = [
          'name' => 'required|max:50',
          'email' => 'required|max:255|regex:/\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/i|unique:users',
          'password' => 'required|min:6',
          ];
          
          if ($request->password !== $request->password_confirmation) {
              return Redirect::back()
    			->withErrors("パスワードと確認用パスワードが一致しません。");
          }

          $messages = array(
    		'name.required' => '名前を正しく入力してください。',
    		'name.max' => '名前は50文字以内で入力してください。',
    		'email.required' => 'アドレスを正しく入力してください。',
    		'email.max' => 'アドレスは255文字以内入力してください。',
    		'email.regex' => 'アドレスは正しい形式で入力してください。',
    		'email.unique' => 'そのアドレスは既に登録済です。',
     		'password.required' => 'パスワードを正しく入力してください。',
    		'password.min' => 'パスワードは6文字以上入力してください。',
    	    );

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->passes()) {
    		$user = new User;
    		$user->name = $request->name;
    		$user->email = $request->email;
    		// パスワードハッシュ化
     		$user->password = Hash::make($request->password);
    		$user->save();
    		return redirect()
		    ->action('Users@show', $user->id)
			->with('message', '登録が完了しました。');
    	}else{
    		return Redirect::back()
    			->withErrors($validator)
    			->withInput();
     	}
    }
}
