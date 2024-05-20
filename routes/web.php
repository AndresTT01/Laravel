<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JumexController;
use App\Http\Controllers\SaborController;

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

Route::get('/', function () {
    return view('welcome');
});

// RUTAS
// Route::get('/jumex', [JumexController::class, 'index'])->name('jumex.index');
// Route::get('/jumex/create', [JumexController::class, 'create'])->name('jumex.create');
// Route::post('/jumex', [JumexController::class, 'store'])->name('jumex.store');
// Route::get('/jumex/{id}', [JumexController::class, 'show'])->name('jumex.show'); 
// Route::get('/jumex/{id}/edit', [JumexController::class, 'edit'])->name('jumex.edit'); 
// Route::patch('/jumex/{id}', [JumexController::class, 'update'])->name('jumex.update'); 
// Route::delete('/jumex/{id}', [JumexController::class, 'destroy'])->name('jumex.destroy');
// Route::view('/', 'index');

Route::resource('jumex', JumexController::class);
Route::resource('sabor', SaborController::class);