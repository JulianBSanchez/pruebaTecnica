<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CategoriaController;
use App\Http\Controllers\Api\V1\ProductoController;

Route::apiResource('v1/products', ProductoController::class);
Route::apiResource('v1/categorias', CategoriaController::class);
