<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // $some= Restaurant::where('id',3)->value('imageFile');
        // dd($some);


       // *to select image by name 
        $image= Restaurant:: select('imageFile')
                            -> where('name', '=', 'gellary') 
                            ->get();
                        
        // $some=Restaurant:: select('imageFile')
        //                     ->where('name', '=', '$req->name')
        //                     ->get();
        return view('index', compact('image'));
    }
    // public function show()
    // {
    //     $some= Restaurant::where('id',1)->value('imageFile');
    //     // dd($some);
    //     return view('test',compact('some'));
    // }
}
