<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return ['status'=>200,'description'=>'successful login'];
            
        }
        return ['status'=>500,'description'=>'faileds login'];
       
    }
}
