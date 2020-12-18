<?php

use App\Http\Controllers\CasinoController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SportbookController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('page.')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('welcome');
    Route::get('/term', [PageController::class, 'terms_conditions'])->name('terms_conditions');
    Route::get('/privacy', [PageController::class, 'privacy_policy'])->name('privacy_policy');
    Route::get('/responsible_gambling', [PageController::class, 'responsible_gambling'])->name('responsible_gambling');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/loyalty', [PageController::class, 'loyalty'])->name('loyalty');
    Route::get('/promotions', [PageController::class, 'promotions'])->name('promotions');
    Route::get('/comming_soon', [PageController::class, 'comming_soon'])->name('comming_soon');
});

Route::name('game.')->group(function () {
    Route::get('/baccarat', [GameController::class, 'baccarat'])->name('baccarat');
    Route::get('/kino', [GameController::class, 'index'])->name('kino');
    Route::get('/slot', [GameController::class, 'slot'])->name('slot');
    Route::get('/lottery', [GameController::class, 'lottery'])->name('lottery');
    Route::get('/baccarat_ins', [GameController::class, 'baccarat_ins'])->name('baccarat_ins');
    Route::get('/dragon_tiger', [GameController::class, 'dragon_tiger'])->name('dragon_tiger');
    Route::get('/roulette', [GameController::class, 'roulette'])->name('roulette');
    Route::get('/xocdia', [GameController::class, 'xocdia'])->name('xocdia');
    Route::get('/fantan', [GameController::class, 'fantan'])->name('fantan');
    Route::get('/belangkai', [GameController::class, 'belangkai'])->name('belangkai');
});

Route::get('/casino', [CasinoController::class, 'index'])->name('casino');
Route::get('/sportbooks', [SportbookController::class, 'index'])->name('sportbooks');
