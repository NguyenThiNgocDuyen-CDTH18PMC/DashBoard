<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct() {
        @session_start();        
    }    
    /*public function postlogin(Request $request){
        if($request->username == '' || $request->password == ''){
            return redirect('/')->with('notice', 'Tài khoản và mật khẩu không được để trống.');
        }
    }*/
    public function postlogin(Request $request){
       
        if($request->username == '' || $request->password == ''){
            return redirect('/')->with('notice', 'Tài khoản và mật khẩu không được để trống.');
        }

        if($request->username == "admin"  && $request->password == "123456"){
            $_SESSION['admin'] = 'Admin';
            return redirect('ve');       
        }else{
            return redirect('/')->with('notice', 'Tài khoản hoặc mật khẩu chưa chính xác.');
        }        
    }  
}
