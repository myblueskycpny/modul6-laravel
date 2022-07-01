<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\b1Controller;
use App\Http\Controllers\b2Controller;
use App\Http\Controllers\b3Controller;
use App\Http\Controllers\b4Controller;
use App\Http\Controllers\b5Controller;
use App\Http\Controllers\kalkulatorController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\movieController;
use App\Http\Controllers\m4t1Controller;
use App\Http\Controllers\m4t2Controller;
use App\Http\Controllers\m4t3Controller;
use App\Http\Controllers\m4t3formController;
use App\Http\Controllers\dashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/post', function () {
    return view('admin/post');
});
Route::get('/create', function () {
    return view('admin/create');
});
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/article',[articleController::class,'index']);
Route::get('/b1',[b1Controller::class,'index']);
Route::get('/b2',[b2Controller::class,'index']);
Route::get('/b3',[b3Controller::class,'index']);
Route::get('/b4',[b4Controller::class,'index']);
Route::get('/b5',[b5Controller::class,'index']);
Route::get('/kalkulator',[kalkulatorController::class,'index']);
Route::get('/profil',[profilController::class,'index']);
Route::get('/movie',[movieController::class,'index']);
Route::get('/m4t1',[m4t1Controller::class,'index']);
Route::get('/m4t2',[m4t2Controller::class,'index']);
Route::get('/m4t3',[m4t3Controller::class,'index']);
Route::post('/m4t3form',[m4t3formController::class,'index']);
Route::get('/dashboard',[dashboardController::class,'index']);