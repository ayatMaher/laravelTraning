<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('users' , [UserController::class , 'index']);
Route::get('user/{id}' , [UserController::class , 'delete']);
Route::get('user/{id}/edit' , [UserController::class , 'edit'])->name('user.edit');;
Route::put('user/update/{id}',[UserController::class , 'update'])->name('user.update');;

