<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumniController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');



Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');



// Route::group(['middleware' => ['auth', 'ceklevel:1']], function () {
Route::get('home', function () {
    return view('home');
});

Route::get('/daftar-alumni', [AlumniController::class, 'index'])->name('daftaralumni');
Route::get('/tambah-alumni', [AlumniController::class, 'create'])->name('createalumni');
Route::post('/store-alumni', [AlumniController::class, 'store'])->name('storealumni');
Route::get('/edit-alumni/{id}', [AlumniController::class, 'edit'])->name('editalumni');
Route::post('/update-alumni/{id}', [AlumniController::class, 'update'])->name('updatealumni');
Route::get('/hapus-alumni/{id}', [AlumniController::class, 'destroy'])->name('destroyalumni');
// });
