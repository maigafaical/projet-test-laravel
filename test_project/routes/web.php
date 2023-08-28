<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'acceuil'])->name('home');

Route::get('apropos_de_nous', [PageController::class, 'apropos'])->name('apropos');

Route::get('contactez-nous', [PageController::class, 'contact'])->name('contacts');


