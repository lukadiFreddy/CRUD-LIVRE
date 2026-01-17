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
Route::get('/liste_Livre', [LivreController::class, 'listeLivre'])->name('liste_article');
Route::get('/ajout_livre', [LivreController::class, 'ajoutLivre']);
Route::get('/modifier{id}', [LivreController::class, 'updateLivre']);
Route::post('modifier/traitement', [LivreController::class, 'updateLivreAction']);
Route::post('/ajoutLivre', [LivreController::class, 'ajoutLivreAction']);
Route::get('/delete{id}', [LivreController::class, 'deleteLivre']);
