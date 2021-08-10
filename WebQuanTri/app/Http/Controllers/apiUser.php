<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Validator;


class apiUser extends Controller
{
  public function Account()
  {
    $list =User::where('status',1)
    ->get();
    return response()->json($list,200);
  }
  public function deleteAccount($id)
  {
    $list = User::find($id);
        $list->Status=0;
        $list->save();
        return response()->json(['token'=>'xoa thanh cong'],200);
  }
  public function addAccount(Request $request)
  {
    $contact = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' =>bcrypt($request->password),
      'role' => $request->role,
      'status' => $request->status,
      ]);

      return response()->json(['token' => $request->name], 200);
  }
  public function detailUser(Request $request,$id){
    $list = User::findOrFail($id);
    return response()->json($list,200);
  }
  
  public function edit(Request $request,$id){
    $list = User::findOrFail($id );
    $list->name=$request->name;
    $list->email=$request->email;
    $list->role=$request->role;
    $list->status=$request->status;
    $list->save();
    return response()->json($list,200);
}

}
