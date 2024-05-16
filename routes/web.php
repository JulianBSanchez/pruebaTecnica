<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;


Route::resource('/categoria', CategoriaController::class);
Route::resource('/producto', ProductoController::class);
