<?php

use App\Http\Controllers\schoolscontroroller;
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




Route::get('/',[schoolscontroroller::class,'index']);
Route::post('Add/std',[schoolscontroroller::class,'AddStd']);
Route::post('del/std/{id}',[schoolscontroroller::class,'Delet']);


