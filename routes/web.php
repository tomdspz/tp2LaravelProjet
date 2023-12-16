<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\PhotoController;
// use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [FirstController::class, 'index']);

Route::get("/albums", [FirstController::class, 'albums']);
Route::get("/album/{id}", [FirstController::class, 'album'])->where('id','[0-9]+');

Route::get("/search", [FirstController::class, 'search']);

Route::get("/account", [FirstController::class, 'account'])->middleware("auth");

Route::group(['middleware'=> 'auth'], function () {
    Route::resource('/photo',PhotoController::class)->only(["create", "store"]);
});

Route::resource('/films',PhotoController::class)->only(["index", "show"]);