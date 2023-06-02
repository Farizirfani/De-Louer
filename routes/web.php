<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kosts', [KostsController::class, 'index'])->name('kosts');
Route::put('/kosts/{id}', [KostsController::class, 'update']);
Route::post('/kosts', [KostsController::class, 'store']);
Route::delete('/kosts/{id}', [KostsController::class, 'destroy']);
