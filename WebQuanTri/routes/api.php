<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//POST
Route::post('/apilogin','apiController@login');
Route::post('/apicontact1','apiController@contact');
Route::post('/apiregister','apiController@register');
Route::post('/apicontactmail','apiController@contactus');
Route::post('/apidetail/{id}', 'apiController@detail');
Route::post('/apibinhluan','apiController@createbinhluan');
Route::post('/apipost','apiController@post');
//GET
Route::get('/apidata','apiController@datas');
Route::get('/apigetcontact','apiController@contact');
Route::get('/apigetgadgest','apiController@gadgest');
Route::get('/apigetvideo','apiController@video');
Route::get('/apigetreview','apiController@review');
Route::get('/apigetbinhluan/{id}','apiController@binhluan');
Route::get('/apigetdetail/{id}','apiController@detail');

//
Route::post('/apiforgot_password','ResetPasswordController@forgot_password');
Route::post('/apireset','ResetPasswordController@reset');
//
Route::post('/apiforgot','apiController@forgot');
Route::post('/apipass','apiController@pass');
Route::post('/apireset','apiController@reset');
Route::get('/apipage','apiController@page');
Route::get('/apideleteprofile/{id}','apiController@deleteprofile');
Route::get('/apitopview','apiController@topview');

Route::post('/apitimkiem','apiController@timkiem');
Route::get('/apitimkiem','apiController@timkiem');
Route::get('/apisort','apiController@sort');
Route::get('/apidesign','apiController@design');
Route::get('/apidevelopment','apiController@development');
Route::post('/apiedit/{id}','apiController@edit');
Route::get('/apia','apiController@a');
Route::get('/apiget_use/{id}','apiController@get_use');
Route::get('/apideletepost/{id}','apiController@deletePost');

// Account
Route::get('/apigetAccount','apiUser@Account');
Route::get('/apideleteAccount/{id}','apiUser@deleteAccount');
Route::post('/apiaddAccount','apiUser@addAccount');
Route::get('/apiUser/{id}','apiUser@detailUser');
Route::post('/apieditAccount/{id}','apiUser@edit');

// Comment 
 Route::get('/apigetBinhLuan','apiBinhLuan@getBinhLuan');





