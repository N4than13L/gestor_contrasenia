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

// cambiar contrasena 
Route::get('/user/password', [UserController::class, 'change'])->name('changepassword.user');

Route::post('/user/updatepassword/{id}', [UserController::class, 'change_password'])->name('updatepassword.user');


// ver formuario para agregar aplicaciones 
Route::get('/apps', [AppsController::class, 'apps'])->name('apps.view');

// guardar apps a db.
Route::post('/save', [AppsController::class, 'save'])->name('save.apps');

// ver contrasena de las aplicaciones.
Route::get('/app/password/{id}', [AppsController::class, 'password'])->name('password.apps');

// eliminar las apps.
Route::get('/delete/{id}', [AppsController::class, 'delete'])->name('delete.apps');

// editar las aplicaciones.
Route::get('/app/edit/{id}', [AppsController::class, 'edit'])->name('edit.apps');

// enviar los cambios de las  aplicaciones.
Route::post('/app/update/{id}', [AppsController::class, 'update'])->name('update.apps');
