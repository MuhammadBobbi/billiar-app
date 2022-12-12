<?php

use App\Http\Controllers\tb_mejaController;
use App\Http\Controllers\tb_mejaAdminController;
use App\Models\tb_meja;
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
Route::get('/homeadmin',[tb_mejaAdminController::class,'index'] );
Route::get('/home',[tb_mejaController::class,'index'] );
Route::get('/create/create',[tb_mejaController::class,'create'] );
Route::post('/create/store',[tb_mejaController::class,'store'] );
Route::get('/create/{id}/edit',[tb_mejaController::class,'edit'] );
Route::put('/create/{id}',[tb_mejaController::class,'update'] );
Route::delete('/create/{id}',[tb_mejaController::class,'destroy'] );
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/myorder', function () {
    return view('myorder');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/create', function () {
    return view('create');
});

