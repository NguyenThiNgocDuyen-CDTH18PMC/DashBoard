<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Validator;
use App\Binhluan;

use Illuminate\Support\Facades\DB;


class apiBinhLuan extends Controller
{
  public function getBinhLuan()
  {
    $list = Binhluan::where('binhluans.trangthai',1)
    ->join('dulieus', 'binhluans.post_id', '=', 'dulieus.id')
    ->join('users', 'binhluans.use_id', '=', 'users.id')
    ->get();
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
