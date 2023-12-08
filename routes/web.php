<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;


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
Route::get("/search", [FirstController::class, 'search']);
Route::get("/account", [FirstController::class, 'account']);
Route::post("/account", [FirstController::class, 'ajoutImg']);
Route::get("/login", [FirstController::class, 'login']);