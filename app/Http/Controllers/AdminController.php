<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function storeImage(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $image=$request->image->getClientOriginalExtension();
        $imageName=time().'.'.$image;
        $request->image->move(public_path('Images'), $imageName);

        $store= new Restaurant();
        $store->name=$request->name;
        $store->description=$request->description;
        $store->imageFile=json_encode($imageName);
        $store->save();

        return redirect()->route('show');
    }

    // public function show()
    // {
    //     $some= Restaurant::where('id',1)->value('imageFile');
    //     // dd($some);
    //     return view('test',compact('some'));
    // }
}
