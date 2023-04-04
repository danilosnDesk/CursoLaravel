<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Login;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GetPdf;




Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/producto/{slug}', [SiteController::class, 'details'])->name('details');
Route::get('/categoria/{id}', [SiteController::class, 'getCategoria'])->name('categoria');


Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [Login::class, 'auth'] )->name('login.auth');
Route::get('/logout', [Login::class, 'logout'] )->name('login.logout');
Route::get('/register', [Login::class, 'create'] )->name('login.create');


Route::get('admin/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('admin/pdf', [GetPdf::class, 'pdf'] )->name('admin.pdf');

Route::get('admin/productos/', [ProductoController::class, 'index'])->name('admin.productos');
Route::get('/teste', function(){
    return view('teste');
})->name('teste')->middleware('auth');


