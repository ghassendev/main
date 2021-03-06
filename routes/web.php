<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\RouletteController;

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


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/shop1', function () {
//     return view('shop.index');
// });

Route::get('/',[RouletteController::class,'showMainRound'])->name('showMainRound');
Route::post('/',[RouletteController::class,'handleAddResultRound'])->name('handleAddResultRound');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/sendtiquet',[ticketController::class,'handleTicket'])->name('handleTicket');
Route::get('/shop1',[RouletteController::class,'showShop'])->name('showShop');
Route::get('/login',[authController::class,'showClientLogin'])->name('showClientLogin');
Route::post('/login',[authController::class,'handleClientLogin'])->name('handleClientLogin');