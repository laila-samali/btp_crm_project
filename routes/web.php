<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlLotController;
use App\Http\Controllers\BonLivraisonController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\SousLotController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::resource('articles', ArticleController::class);
Route::resource('bl_lots', BlLotController::class);
Route::resource('bon_livraisons', BonLivraisonController::class);
Route::resource('devis', DevisController::class);
Route::resource('factures', FactureController::class);
Route::resource('paiements', PaiementController::class);
Route::resource('lots', LotController::class);
Route::resource('sous_lots', SousLotController::class);
Route::resource('users', UserController::class);
