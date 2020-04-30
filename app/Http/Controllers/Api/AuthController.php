<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  
 
    public function registration()
    {
        return view('signup');
    }
     
    public function postLogin(Request $request)
    {
        // request()->validate([
        // 'email' => 'required',
        // 'password' => 'required',
        // ]);
 
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return ['status'=>200,'description'=>'successful login'];
            
        // }
        // return ['status'=>500,'description'=>'faileds login'];






        
       
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        //return Redirect::to("testing")->withSuccess('Great! You have Successfully loggedin');
        return Redirect::to("index")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('testing');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
