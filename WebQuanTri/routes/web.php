<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('master');
}); 
Route::get('/phim',
'phimController@getIndex'
);



Route::get('/', 'loginController@homelogin');

Route::post('/login', 'UserController@postlogin');

//chinhanh
Route::get('/chinhanh-ds','chinhanhController@getIndex')->name('chinhnhanh.index');
Route::get('/chinhanh-add','chinhanhController@add')->name('chinhanh.add');
Route::post('/chinhanh-store','chinhanhController@store')->name('chinhanh.store');
Route::get('/chinhanh-delete/{id}','chinhanhController@delete')->name('chinhanh.delete');
Route::get('/chinhanh-destroy/{id}','chinhanhController@destroy')->name('chinhanh.destroy');
Route::get('/chinhanh-edit/{id}','chinhanh2Controller@edit')->name('chinhanh.edit');
Route::post('chinhanh-update/{id}', 'chinhanh2Controller@update')->name('chinhanh.update');
//suatchieu
Route::get('/suatchieu','suatchieuController@getIndex')->name('suatchieu.index');
Route::get('/suatchieu-add','suatchieuController@add')->name('suatchieu.add');
Route::post('/suatchieu-store','suatchieuController@store')->name('suatchieu.store');
Route::get('/suatchieu-destroy/{id}','suatchieuController@destroy')->name('suatchieu.destroy');
Route::get('/suatchieu-edit/{id}','suatchieuController@edit')->name('suatchieu.edit');
Route::post('suatchieu-update/{id}', 'suatchieuController@update')->name('suatchieu.update');
//ghe
Route::get('/ghe','gheController@getIndex')->name('ghe.index');
Route::get('/ghe-add','gheController@add')->name('ghe.add');
Route::post('/ghe-store','gheController@store')->name('ghe.store');
Route::get('/ghe-destroy/{id}','gheController@destroy')->name('ghe.destroy');
Route::get('/ghe-edit/{id}','gheController@edit')->name('ghe.edit');
Route::post('ghe-update/{id}','gheController@update')->name('ghe.update');

//phòng
Route::resource('/phong','phongController');
Route::get('/phong-edit/{id}','phongController@edit')->name('phong.edit');
Route::post('phong-update/{id}', 'phongController@update')->name('phong.update');
Route::get('/phong-destroy/{id}','phongController@destroy')->name('phong.destroy');
Route::get('/phong-show/{id}','phongController@show')->name('phong.show');

//lịch chiếu
Route::get('/lichchieu','lichchieuController@getIndex')->name('lichchieu.index');
Route::get('/lichchieu-add','lichchieuController@add')->name('lichchieu.add');
Route::post('/lichchieu-store','lichchieuController@store')->name('lichchieu.store');
Route::get('/lichchieu-destroy/{id}','lichchieuController@destroy')->name('lichchieu.destroy');
Route::get('/lichchieu-edit/{id}','lichchieuController@edit')->name('lichchieu.edit');
Route::post('lichchieu-update/{id}', 'lichchieuController@update')->name('lichchieu.update');
//loaiphim
Route::get('/loaiphim','loaiphimController@getIndex')->name('loaiphim.index');
Route::get('/loaiphim-add','loaiphimController@add')->name('loaiphim.add');
Route::post('/loaiphim-store','loaiphimController@store')->name('loaiphim.store');
Route::get('/loaiphim-destroy/{id}','loaiphimController@destroy')->name('loaiphim.destroy');
Route::get('/loaiphim-edit/{id}','loaiphimController@edit')->name('loaiphim.edit');
Route::post('loaiphim-update/{id}', 'loaiphimController@update')->name('loaiphim.update');
//thành viên
Route::get('/thanhvien','thanhvienController@getIndex')->name('thanhvien.index');
Route::get('/thanhvien-add','thanhvienController@add')->name('thanhvien.add');
Route::post('/thanhvien-store','thanhvienController@store')->name('thanhvien.store');
Route::get('/thanhvien-destroy/{id}','thanhvienController@destroy')->name('thanhvien.destroy');
Route::get('/thanhvien-edit/{id}','thanhvienController@edit')->name('thanhvien.edit');
Route::post('thanhvien-update/{id}', 'thanhvienController@update')->name('thanhvien.update');
//Comment
Route::get('/comment','commentController@getIndex')->name('comment.index');
Route::get('/comment-add','commentController@add')->name('comment.add');
Route::post('/comment-store','commentController@store')->name('comment.store');
Route::get('/comment-destroy/{id}','commentController@destroy')->name('comment.destroy');
Route::get('/comment-edit/{id}','commentController@edit')->name('comment.edit');
Route::post('comment-update/{id}', 'commentController@update')->name('comment.update');
//Phim
Route::get('/phim','phimController@getIndex')->name('phim.index');
Route::get('/phim-add','phimController@add')->name('phim.add');
Route::post('/phim-store','phimController@store')->name('phim.store');
Route::get('/phim-destroy/{id}','phimController@destroy')->name('phim.destroy');
Route::get('/phim-edit/{id}','phimController@edit')->name('phim.edit');
Route::post('phim-update/{id}', 'phimController@update')->name('phim.update');
//ve
Route::get('/ve','veController@getIndex')->name('ve.index');
Route::get('/ve-add','veController@add')->name('ve.add');
Route::post('/ve-store','veController@store')->name('ve.store');
Route::get('/ve-destroy/{id}','veController@destroy')->name('ve.destroy');
Route::get('/ve-edit/{id}','veController@edit')->name('ve.edit');
Route::post('ve-update/{id}', 'veController@update')->name('ve.update');

//api

Route::get('/apiphim','apiController@indexPhim');
Route::get('/apighe','apiController@indexGhe');
Route::get('/apive','apiController@indexVe');
Route::get('/apichinhanh','apiController@indexChinhanh');
Route::get('/apiphong','apiController@indexPhong');
Route::get('/apilichchieu','apiController@indexLichchieu');
Route::get('/apisuatchieu','apiController@indexSuatchieu');
Route::get('/apicomment','apiController@indexComment');
Route::get('/apichitietve','apiController@indexChitiet');
Route::get('/apiloaiphim','apiController@indexLoaiphim');
Route::get('/apithanhvien','apiController@indexThanhvien');
Route::get('/apidsphim','apiController@dsphim');
//
Route::get('/apiphimsapchieu','apiController@indexPhim');
Route::get('/apiphimdangchieu','apiController@indexphimdangchieu');

Route::get('/api5dangchieu','apiController@index5phimdangchieu');
Route::get('/api5sapchieu','apiController@index5phimsapchieu');
Route::get('/apicontact','apiController@contact');






