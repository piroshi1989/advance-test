<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Livewire\ValidationContact;

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

Route::get('/contacts',[ContactController::class,('contacts')]);
Route::post('/contacts/confirm',[ValidationContact::class,('confirm')]);
Route::post('/contacts',[ContactController::class,('store')]);


Route::get('/',[ContactController::class,('index')]);
Route::get('/search',[ContactController::class,('search')]);
Route::delete('/',[ContactController::class,('destroy')]);