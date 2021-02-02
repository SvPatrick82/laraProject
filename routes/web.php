<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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
Route::get('/contacts', [MainController::class,'contacts']); //->middleware('auth') - добавить посредника

Route::post('/contacts', [MainController::class,'getContacts']);
Route::get('/sale', [StoreController::class,'sale']);
Route::get('/reviews', [ReviewController::class,'reviews']);
Route::post('/reviews', [ReviewController::class,'getReviews']);
Route::get('/news', [NewsController::class,'news']);
Route::get('/category/{slug}', [StoreController::class,'category']);



Auth::routes();


Route::middleware(['auth'])->prefix('admin')->group(function(){
	Route::get('/',[AdminController::class,'index']);
	Route::resource('/category', CategoryController::class);
});



