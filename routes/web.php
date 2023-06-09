<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ReservationController;

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

// Route admin for kosts
Route::get('/admin', [adminController::class, 'index'])->name('admin_index')->middleware('admin');
Route::get('/admin/create/kosts', [adminController::class, 'view_create_kosts'])->name('admin_create_kosts')->middleware('admin');
Route::post('/admin/create/kosts', [adminController::class, 'create_kosts'])->name('create_kosts')->middleware('admin');
Route::get('/admin/edit/kosts/{id}', [adminController::class, 'view_edit_kosts'])->name('admin_edit_kosts')->middleware('admin');
Route::put('/admin/edit/kosts/{id}', [adminController::class, 'edit_kosts'])->name('edit_kosts')->middleware('admin');
Route::delete('/admin/edit/kosts/{id}', [adminController::class, 'destroy_kosts'])->name('destroy_kosts')->middleware('admin');


// Route admin for rooms
Route::get('/admin/rooms/{id}', [adminController::class, 'view_index_rooms'])->name('view_index_rooms')->middleware('admin');
Route::get('/admin/create/rooms/{id}', [adminController::class, 'view_create_rooms'])->name('admin_create_rooms')->middleware('admin');
Route::post('/admin/create/rooms/{id}/', [adminController::class, 'create_rooms'])->name('create_rooms')->middleware('admin');
Route::get('/admin/edit/rooms/{id}', [adminController::class, 'view_edit_rooms'])->name('view_edit_rooms')->middleware('admin');
Route::put('/admin/edit/rooms/{id}', [adminController::class, 'edit_rooms'])->name('edit_rooms')->middleware('admin');
Route::delete('/admin/destroy/rooms/{id}', [adminController::class, 'destroy_rooms'])->name('destroy_rooms')->middleware('admin');

// Route Kosts
Route::get('/kosts', [KostsController::class, 'index'])->name('kosts');
Route::get('/kosts/{id}', [KostsController::class, 'show'])->name('kosts.show');
Route::put('/kosts/{id}', [KostsController::class, 'update']);
Route::delete('/kosts/{id}', [KostsController::class, 'destroy']);

// Route Rooms
Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route::get('/rooms/{id}', [RoomsController::class, 'show'])->name('room.show');

//Route Reservations
// Route::get('/Reservatiom', [Reservations::class, 'view_reservation'])->name('view_reservation');
// Route::post('/Reservation/{id}', [ReservationController::class, 'create_reservation'])->name('create_reservation');

Route::post('/reservation/{id}', [ReservationController::class, 'create_reservation'])->name('create_reservation');
