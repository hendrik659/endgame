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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user', [App\Http\Controllers\usercontroller::class, 'index'])->middleware(['CheckLevel:administrator'])->name('user.index');
Route::get('user/create', [App\Http\Controllers\usercontroller::class, 'create'])->middleware(['CheckLevel:administrator'])->name('user.create');
Route::post('user/store', [App\Http\Controllers\usercontroller::class, 'store'])->middleware(['CheckLevel:administrator'])->name('user.store');
Route::get('user/edit/{id}', [App\Http\Controllers\usercontroller::class, 'edit'])->middleware(['CheckLevel:administrator'])->name('user.edit');
Route::put('user/update/{id}', [App\Http\Controllers\usercontroller::class, 'update'])->middleware(['CheckLevel:administrator'])->name('user.update');
Route::get('user/show/{id}', [App\Http\Controllers\usercontroller::class, 'show'])->middleware(['CheckLevel:administrator'])->name('user.show');
Route::delete('user/delete/{id}', [App\Http\Controllers\usercontroller::class, 'destroy'])->middleware(['CheckLevel:administrator'])->name('user.delete');


Route::get('masyarakat', [App\Http\Controllers\masyarakatcontroller::class, 'index'])->middleware(['auth'])->name('masyarakat.index');
Route::get('masyarakat/create', [App\Http\Controllers\masyarakatcontroller::class, 'create'])->name('masyarakat.create');
Route::post('masyarakat/store', [App\Http\Controllers\masyarakatcontroller::class, 'store'])->name('masyarakat.store');
Route::get('masyarakat/edit/{id}', [App\Http\Controllers\masyarakatcontroller::class, 'edit'])->middleware(['CheckLevel:administrator'])->name('masyarakat.edit');
Route::put('masyarakat/update/{id}', [App\Http\Controllers\masyarakatcontroller::class, 'update'])->middleware(['CheckLevel:administrator'])->name('masyarakat.update');
Route::get('masyarakat/show/{id}', [App\Http\Controllers\masyarakatcontroller::class, 'show'])->middleware(['CheckLevel:administrator'])->name('masyarakat.show');
Route::delete('masyarakat/delete/{id}', [App\Http\Controllers\masyarakatcontroller::class, 'destroy'])->middleware(['CheckLevel:administrator'])->name('masyarakat.delete');

Route::get('/masyarakat/pengaduan', [App\Http\Controllers\pengaduancontroller::class, 'index'])->name('masyarakat.pengaduan.index');
Route::get('/masyarakat/pengaduan/create', [App\Http\Controllers\pengaduancontroller::class, 'create'])->name('masyarakat.pengaduan.create');
Route::post('/masyarakat/pengaduan/store', [App\Http\Controllers\pengaduancontroller::class, 'store'])->name('masyarakat.pengaduan.store');
Route::get('pengaduan/edit/{id}', [App\Http\Controllers\pengaduancontroller::class, 'edit'])->middleware(['CheckLevel:administrator'])->name('pengaduan.edit');
Route::put('pengaduan/update/{id}', [App\Http\Controllers\pengaduancontroller::class, 'update'])->middleware(['CheckLevel:administrator'])->name('pengaduan.update');
Route::get('pengaduan/show/{id}', [App\Http\Controllers\pengaduancontroller::class, 'show'])->middleware(['CheckLevel:administrator'])->name('pengaduan.show');
Route::delete('pengaduan/delete/{id}', [App\Http\Controllers\pengaduancontroller::class, 'destroy'])->middleware(['CheckLevel:administrator'])->name('pengaduan.delete');

Route::get('/masyarakat/login', 'App\Http\Controllers\Masyarakat\MasyarakatLoginController@showLoginForm')->name('masyarakat.login');
Route::post('/masyarakat/login', 'App\Http\Controllers\Masyarakat\MasyarakatLoginController@login')->name('masyarakat.login.post');
Route::post('/masyarakat/logout', 'App\Http\Controllers\Masyarakat\MasyarakatLoginController@logout')->name('masyarakat.login');