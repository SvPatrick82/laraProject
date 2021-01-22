<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'MainController@index'); - for laravel до 8 версии

Route::get('/', [MainController::class,'index']);
Route::get('/contacts', [MainController::class,'contacts']);
Route::post('/contacts', [MainController::class,'getContacts']);
Route::get('/sale', [MainController::class,'StoreController']);
Route::get('/action', [MainController::class,'action']);
Route::get('/reviews', [ReviewController::class,'reviews']);
Route::post('/reviews', [ReviewController::class,'getReviews']);
