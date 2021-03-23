<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        $store =new User();
        $store->email=$request->email;
        $store->password=$request->password;

        Auth()->attempt($request->only('email','password'));
        return back();
    }
}
