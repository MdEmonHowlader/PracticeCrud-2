<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CrudController extends Controller
{
   public function AddData(){
    return view('add_data');
   }

   public function ShowData(){
    return view('show_data');
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
   
      return $request->all();

   }
}
