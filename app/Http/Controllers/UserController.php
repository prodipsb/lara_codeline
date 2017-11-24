<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Http\Requests\UserRequest;
use Hash;

class UserController extends Controller
{
   
    public function check_user_id(){
        $user_id = Session::has('user_id');
        if(empty($user_id)){
            return redirect('/user/login');
        }else{
            return view('backend/add_film');
        }
    }
    public function user_registration(){
     //   dd('ok');
    
         return view('user_registration');
    }
    public function save_user(UserRequest $request){
     //   dd('ok');
    
        
        $request->merge(['password' => Hash::make($request->password)]);
        
        User::create($request->all());
      //  dd($user);
         Session::put('user_create_mgs', 'Registration Successful ! Please Login');
         return redirect('/user/login'); 
    }
    
    public function user_login(){
       
        return view('user_login');
    }
    public function user_login_checkout(UserRequest $request){
      //  dd($request);
        $email = $request->email;
        
        $findUser = User::where('email', $email)->first();
        $user_id = $findUser->id;
        if(Hash::check($request->password, $findUser->password)){
            Session::put('user_id', $user_id);
            Session::put('username', $findUser->name);
            Session::put('user_login_success_mgs','Login Successfully !');
            return redirect('/');
        }else{
            Session::put('invalid_login_mgs','Invalid Login !');
            return redirect()->back();
        }
         
    }
    
    
    public function user_logout(){
        Session::put('user_id', NULL);
        Session::put('name', NULL);
        Session::put('logout_mgs', 'You are Successfully Logout!');
        return redirect('/');
    }
    
    
    
    
}
