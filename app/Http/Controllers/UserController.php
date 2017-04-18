<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class UserController extends Controller
{
	public function getsignup(){
		return view('user.signup');
    }
    public function postsignup(Request $request){
    	$validator = Validator::make($request->all(),
		    array(
		        'name' => 'required',
		        'password' => 'required|min:8',
		        'email' => 'required|email|unique:users'
		    )
		);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$user=new User(['name'=>$request->input('name'),'email'=>$request->input('email'),'password'=>bcrypt($request->input('password'))]);
			$user->save();
			Auth::login($user);
			return redirect()->route('index');
		}
    }
    public function getlogin(){
		return view('user.login');
    }
    public function postlogin(Request $request){
    	$validator = Validator::make($request->all(),
		    array(
		    	'email' => 'required|email',
		        'password' => 'required'
		    )
		);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			echo $request->input('email');
			echo $request->input('password');
			if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
				echo "gg";
  				return redirect()->route('index');
			}else{
				return redirect()->route('user.getlogin');
			}

		}
    }
    public function getLogOut(){
    	Auth::logout();
        return redirect()->route('index');
    }
    public function profile(){
		return view('user.profile');
    }
}
