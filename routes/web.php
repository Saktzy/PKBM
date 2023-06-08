<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MuridController;
use App\Http\Controllers\Admin\BerandaAdminController;
use App\Http\Controllers\Admin\JelajahAdminController;
use App\Http\Controllers\Front\BerandaFrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// admin
Route::resource('admin/beranda', BerandaAdminController::class);
Route::resource('admin/jelajah', JelajahAdminController::class);
Route::resource('admin/admin', AdminController::class);
Route::resource('admin/guru', GuruController::class);
Route::resource('admin/murid', MuridController::class);
// murid/front
Route::get('beranda', [BerandaFrontController::class, 'showBeranda']);
Route::get('jelajah', [BerandaFrontController::class, 'showJelajah']);
