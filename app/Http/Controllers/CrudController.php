<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CrudController extends Controller
{
   public function AddData(){
    return view('add_data');
   }

   public function ShowData(){
      $shData=  Crud::all();
    return view('show_data', compact('shData'));
   }

   public function storeData(Request $request){
      $req=[
         'name'=>'required',
         'email'=>'required|email',
      ];
     $cm=[
      'name.required'=>'Name is required',
      'email.required'=>'Email is required'
     ];
     $this->validate($request,$req,$cm);
     $crud=new Crud();
     $crud->name=$request->name;
     $crud->email=$request->email;
     $crud->save();

     Session()->flash('msg', 'Successfully Added');

   
      return redirect()->back();

   }
}
