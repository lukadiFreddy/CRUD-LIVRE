<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;

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

Route::get('/', [LivreController::class, 'listeLivre']);
Route::get('/ajout_livre', [LivreController::class, 'ajoutLivre']);
