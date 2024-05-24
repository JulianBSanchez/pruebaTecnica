<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\HomeController;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/producto/{id}/generarPDF', [ProductoController::class, 'generarPDF'])->name('producto.generarPDF');
Route::get('/productos/exportar-excel', [ProductoController::class, 'exportarExcel'])->name('productos.exportar-excel');


Route::Resource('categoria', CategoriaController::class);
Route::Resource('producto', ProductoController::class);
Route::Resource('pedido', PedidoController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
