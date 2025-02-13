<?php

use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// tạo route để trỏ đến view


// Route::view('/hello', 'xinchao');

// truyền dữ liệu sang view 

// Route::get('/hello', function () {
//     $title = "PHP3";
//     $text = "WD18320";
//     return view('xinchao', ['title' => $title, 'text' => $text]);
// });

// Route::view('/hello', 'xinchao', [
//     'title'=> 'PHP3',
//     'text' => 'WD18320'
// ]);

// tạo 1 route để trỏ đến hàm trong controller

Route::get('/danhsachKhachhang', [KhachHangController::class, 'index']);
Route::get('/themKhachhang', [KhachHangController::class, 'add']);
Route::get('/suaKhachhang', [KhachHangController::class, 'edit']);
Route::get('/admin', [HomeController::class, 'admin']);
Route::resource('admin', HomeController::class);

// route resource 
Route::get('/', function(){
    return view('admins.contents.dashboard');
});
Route::resource('sanpham', SanPhamController::class);
