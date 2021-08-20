<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website;

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


Route::get('createuser', [website\UsersCtrl::class, 'create']);
Route::get('updateuser', [website\UsersCtrl::class, 'edit']);
Route::get('deleteuser', [website\UsersCtrl::class, 'destroy']);
//Route::delete('deleteuser', [website\UsersCtrl::class, 'destroy']);
Route::get('user', [website\UsersCtrl::class, 'index']);
Route::resource('users','UsersCtrl');

Route::get('home', [website\HomeCtrl::class, 'index']);
Route::resource('homes','HomeCtrl');
