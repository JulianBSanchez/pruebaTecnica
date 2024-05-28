<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CategoriaController;
use App\Http\Controllers\Api\V1\ProductoController;
use App\Http\Controllers\Api\V1\PedidoController;

Route::apiResource('v1/productos', ProductoController::class);
Route::apiResource('v1/categorias', CategoriaController::class);
//Route::apiResource('v1/pedidos', PedidoController::class);
