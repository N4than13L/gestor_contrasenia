<?php

use App\Http\Controllers\AppsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// sacar datos del usuario registrado
Route::get('/settings', [UserController::class, 'settings'])->name('settings');

// actualizar datos de usuario en la db
Route::post('/update/{id}', [UserController::class, 'update'])->name('update.user');


// ver formuario para agregar aplicaciones 
Route::get('/apps', [AppsController::class, 'apps'])->name('apps.view');

// guardar apps a db.
Route::post('/save', [AppsController::class, 'save'])->name('save.apps');
