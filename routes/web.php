<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SiteController;


Route::resource('productos', ProductoController::class);
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/producto/{slug}', [SiteController::class, 'details'])->name('details');
Route::get('/categoria/{id}', [SiteController::class, 'getCategoria'])->name('categoria');