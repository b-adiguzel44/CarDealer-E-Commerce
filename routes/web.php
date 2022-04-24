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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/userRegister', [\App\Http\Controllers\Register::class, 'userRegister'])->name('userRegister');
Route::post('/userRegisterAgree', [\App\Http\Controllers\Register::class, 'userRegisterAgree'])->name('userRegisterAgree');

//
Route::prefix('admin')->middleware('admincontrol')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminMainController::class, 'adminMain'])->name('admin');
    Route::get('/admindetail', [\App\Http\Controllers\AdminMainController::class, 'admindetail'])->name('admindetail');
    Route::get('/adminupdate', [\App\Http\Controllers\AdminMainController::class, 'adminUpdate'])->name('adminupdate');
    Route::post('/adminUpgrade', [\App\Http\Controllers\AdminMainController::class, 'adminUpgrade'])->name('adminUpgrade');
    Route::get('/userdetail', [\App\Http\Controllers\AdminMainController::class, 'userdetail'])->name('userdetail');
    Route::get('/userDelete', [\App\Http\Controllers\AdminMainController::class, 'userDelete'])->name('userDelete');
    Route::get('/userUpdate', [\App\Http\Controllers\AdminMainController::class, 'userUpdate'])->name('userUpdate');
    Route::post('/userUpgrade', [\App\Http\Controllers\AdminMainController::class, 'userUpgrade'])->name('userUpgrade');
    Route::get('/aktifyap', [\App\Http\Controllers\AdminMainController::class, 'aktifyap'])->name('aktifyap');
    Route::get('/pasifyap', [\App\Http\Controllers\AdminMainController::class, 'pasifyap'])->name('pasifyap');

    Route::get('/itemDetail', [\App\Http\Controllers\AdminMainController::class, 'itemDetail'])->name('itemDetail');
    Route::get('/itemUpdate', [\App\Http\Controllers\AdminMainController::class, 'itemUpdate'])->name('itemUpdate');
    Route::post('/itemUpgrade', [\App\Http\Controllers\AdminMainController::class, 'itemUpgrade'])->name('itemUpgrade');
    Route::post('/itemAdd', [\App\Http\Controllers\AdminMainController::class, 'itemAdd'])->name('itemAdd');
    Route::get('/itemDelete', [\App\Http\Controllers\AdminMainController::class, 'itemDelete'])->name('itemDelete');




});
Route::prefix('users')->middleware('users')->group(function () {
    Route::get('/', [\App\Http\Controllers\UsersMainController::class, 'usersMain'])->name('users');



});



Route::post('/logincontrol', [\App\Http\Controllers\LoginController::class,'loginControl'])->name('logincontrol');
Route::get('/logout', [\App\Http\Controllers\LogoutAll::class,'logoutAll'])->name('logout');
Route::post('forgotpassword',[\App\Http\Controllers\LoginController::class,'forgotpassword'])->name('forgotpassword');
