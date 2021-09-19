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

Route::post('/visitor-counter', [website\VisitorCtrl::class,'index']);

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login', [Auth\LoginController::class, 'index'])->name('login');
Route::resource('logins','Auth\LoginController');
Route::post('login/submit',[Auth\LoginController::class,'onSubmit'])->name('login.submit');

//Route Beranda
Route::get('home', [website\PostingCtrl::class, 'home']);
Route::get('produk/jurnal', [website\ProductHomeCtrl::class, 'journal']);
Route::get('produk/majalah', [website\ProductHomeCtrl::class, 'majalah']);
Route::get('produk/hasil', [website\ProductHomeCtrl::class, 'hasil']);
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
Route::get('direktori/Pengumuman', [website\DirektoriCtrl::class, 'pengumuman']);
Route::get('direktori/kegiatan', [website\DirektoriCtrl::class, 'kegiatan']);
Route::get('direktori/artikel', [website\DirektoriCtrl::class, 'artikel']);
Route::get('direktori/galeri', [website\DirektoriCtrl::class, 'galeri']);

//Route Contact Us dan FAQ
Route::get('kontak', [website\KontakFaqCtrl::class, 'showContact']);
Route::post('kontak', [website\KontakFaqCtrl::class,'sendMail']);
Route::get('faq', [website\KontakFaqCtrl::class, 'faq']);

//Route Dashboard
Route::get('dashboardadmin',[website\DashboardCtrl::class,'dashadmin'])->name('dashboardadmin');
Route::get('dashboardauthor',[website\DashboardCtrl::class,'dashauthor'])->name('dashboardauthor');

//Route CRUD

//Route::get('user', [website\UsersCtrl::class, 'index']);
//Route::resource('users','website\UsersCtrl');
//Route::get('post', [website\PostingCtrl::class,'index']);
//Route::post('post/proses', [website\PostingCtrl::class,'store']);

Route::get('manajemenuser', [Auth\RegisterController::class, 'index']);
Route::resource('users','Auth\RegisterController');
Route::get('manajemenproduct', [website\ProductCrudCtrl::class, 'index']);
Route::resource('products','website\ProductCrudCtrl');
Route::get('manajemenpost', [website\PostingCtrl::class, 'index']);
Route::resource('posts','website\PostingCtrl');
Route::get('manajemenrole', [website\RoleCtrl::class, 'index']);
Route::resource('roles','website\RoleCtrl');
Route::get('manajemencategory', [website\CategoryCtrl::class, 'index']);
Route::resource('categories','website\CategoryCtrl');
Route::get('manajementag', [website\TagCtrl::class, 'index']);
Route::resource('tags','website\TagCtrl');
