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
      // $shData=  Crud::all();
      // $shData=Crud::paginate(5);
      $shData=Crud::simplePaginate(5);
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

   
      return redirect('/');

   }

   public function editData($id){
      $editData=Crud::find($id);
      return view('edit_data',compact( 'editData'));
   }

   public function updateData(Request $request, $id){
      $req=[
         'name'=>'required',
         'email'=>'required|email',
      ];
     $cm=[
      'name.required'=>'Name is required',
      'email.required'=>'Email is required'
     ];
     $this->validate($request,$req,$cm);
     $crud= Crud::find($id);
     $crud->name=$request->name;
     $crud->email=$request->email;
     $crud->save();
     Session()->flash('msg', 'Successfully Updated');
      return redirect('/');
   }

   public function deleteData($id){
      $deleteDAta=Crud::find($id);
      $deleteDAta->delete();
      Session()->flash('msg', 'Successfully Delete');
      return redirect('/');
   }
}
