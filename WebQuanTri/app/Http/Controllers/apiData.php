<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Validator;
use App\Nhom;


class apiData extends Controller
{
  public function DanhMuc()
  {
    $list =Nhom::all();
    return response()->json($list,200);
  }
  public function deletebinhluan($id)
  {
    $list = BinhLuan::find($id);
        $list->binhluan_trang_thai=0;
        $list->save();
        return response()->json(['token'=>'xoa thanh cong'],200);
  }

}
