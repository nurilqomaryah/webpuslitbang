<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website;
use App\Http\Controllers\Auth;
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

//Route Beranda
Route::get('home', [website\PostingCtrl::class, 'home']);
Route::get('produk/jurnal', [website\ProdukCtrl::class, 'journal']);
Route::get('produk/majalah', [website\ProdukCtrl::class, 'majalah']);
Route::get('produk/hasil', [website\ProdukCtrl::class, 'hasil']);
Route::get('videografis', [website\PostingCtrl::class, 'video']);

//Route Profile
Route::get('profile/visi', [website\ProfileCtrl::class, 'visi']);
Route::get('profile/struktur', [website\ProfileCtrl::class, 'struktur']);
Route::get('profile/tusi', [website\ProfileCtrl::class, 'tusi']);
Route::get('profile/tujuan', [website\ProfileCtrl::class, 'tujuan']);
Route::get('profile/dukungan', [website\ProfileCtrl::class, 'dukungan']);
Route::get('profile/pimpinan', [website\ProfileCtrl::class, 'pimpinan']);
Route::get('profile/sekapur', [website\ProfileCtrl::class, 'sekapur']);
Route::get('profile/kapuslitbangwas', [website\ProfileCtrl::class, 'kapuslitbangwas']);

//Route Informasi
Route::get('informasi/serta_merta', [website\InformasiCtrl::class, 'sertamerta']);
Route::get('informasi/setiap_saat', [website\InformasiCtrl::class, 'setiapsaat']);
Route::get('informasi/berkala', [website\InformasiCtrl::class, 'berkala']);

//Route Direktori
Route::get('direktori/pengumuman', [website\DirektoriCtrl::class, 'pengumuman']);
Route::get('direktori/kegiatan', [website\DirektoriCtrl::class, 'kegiatan']);
Route::get('direktori/artikel', [website\DirektoriCtrl::class, 'artikel']);
Route::get('direktori/galeri', [website\DirektoriCtrl::class, 'galeri']);

//Route Contact Us dan FAQ
Route::get('kontak', [website\KontakFaqCtrl::class, 'kontak']);
Route::get('faq', [website\KontakFaqCtrl::class, 'faq']);

//Route CRUD

//Route::get('user', [website\UsersCtrl::class, 'index']);
//Route::resource('users','website\UsersCtrl');
//Route::get('post', [website\PostingCtrl::class,'index']);
//Route::post('post/proses', [website\PostingCtrl::class,'store']);

Route::get('login', [Auth\LoginController::class, 'index']);
Route::resource('logins','Auth\LoginController');

Route::get('manajemenuser', [Auth\RegisterController::class, 'index']);
Route::resource('users','Auth\RegisterController');

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
