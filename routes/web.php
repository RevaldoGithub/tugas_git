<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PersenController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\ProfesiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SekolahController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//FRONTEND
Route::resource('/', HomeController::class);

//BECKEND
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/about', AboutController::class)->middleware('auth');
Route::resource('/banner', BannerController::class)->middleware('auth');
Route::resource('/count', CountController::class)->middleware('auth');
Route::resource('/job', JobController::class)->middleware('auth');
Route::resource('/pengalaman', PengalamanController::class)->middleware('auth');
Route::resource('/sekolah', SekolahController::class)->middleware('auth');
Route::resource('/porto', PortoController::class)->middleware('auth');
Route::resource('/profesi', ProfesiController::class)->middleware('auth');
Route::resource('/persen', PersenController::class)->middleware('auth');
Route::resource('/contact', ContactController::class)->middleware('auth');
Route::resource('/config', ConfigController::class)->middleware('auth');
Route::resource('/form_contact', FormController::class)->middleware('auth');
Route::resource('/profile', ProfileController::class)->middleware('auth');
// Login
Route::get('/panel', [LoginController::class, 'index'])->name('panel')->middleware('guest');
Route::post('/panel', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//REGISTER
Route::resource('/register', RegisterController::class);
