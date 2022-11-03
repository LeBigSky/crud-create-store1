<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
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

Route::post('/pokemon', [FormController::class, 'store'])->name('pokemons.store');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/crea', [FormController::class, 'crea'])->name('creation');