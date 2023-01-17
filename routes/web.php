<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ReservationController;

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
Auth::routes();
Route::get('/EspaceAdministrateur', [HomeController::class, 'EspaceAdministrateur'])->name('EspaceAdministrateur');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('','App\Http\Controllers\ReservationController@Reservation2')->name('Reservation2');
Route::post('','App\Http\Controllers\ReservationController@Reservation')->name('Reservation');
Route::get('/GetFormProduct','App\Http\Controllers\ProduitController@GetFormProduct')->name('GetFormProduct');
Route::post('/AddProduitBD','App\Http\Controllers\ProduitController@AddProduitBD')->name('AddProduitBD');
Route::get('/ListeProduit','App\Http\Controllers\ProduitController@ListeProduit')->name('ListeProduit');
Route::get('/UpdateProduit/{id}','App\Http\Controllers\ProduitController@UpdateProduit')->name('UpdateProduit');
Route::post('/UpdateProduitBD','App\Http\Controllers\ProduitController@UpdateProduitBD')->name('UpdateProduitBD');
Route::get('/DeletProduitBD/{id}','App\Http\Controllers\ProduitController@DeletProduitBD')->name('DeletProduitBD');


