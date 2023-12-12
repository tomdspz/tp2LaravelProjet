<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



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

Route::get("/account", [FirstController::class, 'account']);
Route::post("/account", [FirstController::class, 'ajoutimg']);

// Route::get("/login", [FirstController::class, 'login']);


Route::group(['middleware' => ['web']], function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');
    // ...
});