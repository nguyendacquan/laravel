<?php

// use App\Http\Controllers\AdminController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\KhachHangController;
// use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\Admins\SanPhamController;
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

// tao route de tro den view
// 
// Route::get('/hello', function () {
//     return view('xinchao');

// });
// Route::view('/hello', 'xinchao');


// truyen du lieu sang view
// Route::get('/hello', function () {
//     $title = "ahii";
//     $text = "ahihi";
//     return view('xinchao', ['title' => $title, 'text' => $text]);
// });

// Route::view('/hello', 'xinchao', [
//     'title' => 'ahii',
//     'text' => 'ahii'
// ]);

// tao 1 route de tro den ham trong controller

// Route::get('/san_pham', [SanPhamController::class, 'index']);
// Route::get('/khach_hang', [KhachHangController::class, 'index']);
// Route::get('/them_kh', [KhachHangController::class, 'themkh'])->name('them_kh');
// Route::get('/sua_kh/{id}', [KhachHangController::class, 'chinhsua'])->name('sua_kh');
// Route::get('/danh_sach', [KhachHangController::class, 'danhsach'])->name('danh_sach');

// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('san_pham/san_phamss', [SanPhamController::class, 'san_phamss'])->name('san_pham.san_phamss');
// Route resource
Route::get('san_pham/form', [SanPhamController::class, 'form'])->name('san_pham.form');
Route::resource('san_pham', SanPhamController::class);
