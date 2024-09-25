<?php

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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ContactoController;
Route::get('/contactos', [ContactoController::class, 'index']);

use App\Http\Controllers\PrimerController;
Route::get('/mi-primer-controller', [PrimerController::class, 'index']);

Route::get('/tienda-pro', function () {
    return view('informacion');
});









