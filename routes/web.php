<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostsController;
use App\Http\Controllers\RoomsController;

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

// Route admin
Route::get('/admin', [adminController::class, 'index'])->name('admin_index');
Route::get('/admin/create/kosts', [adminController::class, 'view_create_kosts'])->name('admin_create_kosts');
Route::post('/admin/create/kosts', [adminController::class, 'create_kosts'])->name('create_kosts');
Route::get('/admin/create/rooms/{id}', [adminController::class, 'view_create_rooms'])->name('admin_create_rooms');
Route::post('/admin/create/rooms/{id}/', [adminController::class, 'create_rooms'])->name('create_rooms');

// Route Kosts
Route::get('/kosts', [KostsController::class, 'index'])->name('kosts');
Route::get('/kosts/{id}', [KostsController::class, 'show'])->name('kosts.show');
Route::put('/kosts/{id}', [KostsController::class, 'update']);
Route::delete('/kosts/{id}', [KostsController::class, 'destroy']);

// Route Rooms
Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route::get('/rooms/{id}', [RoomsController::class, 'show'])->name('room.show');
