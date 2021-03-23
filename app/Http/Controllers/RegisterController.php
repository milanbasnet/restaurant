<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // public function index(){
    //     return view('auth.register');
    // }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $store= new User();
        $store->name=$request->name;
        $store->email=$request->email;
        $store->password=Hash::make($request->password);
        $store->save();

        Auth()->attempt($request->only('email','password'));
        return back();
    }
}
