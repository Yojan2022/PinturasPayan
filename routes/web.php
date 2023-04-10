<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta vista crear usuario
Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('usercreate');
//ruta mostrar usuarios
Route::get('userTable', [App\Http\Controllers\UserController::class, 'traer'])->name('userTable');
//ruta crear usuario
Route::post('/users', [App\Http\Controllers\UserController::class,'store'])->name('users.store');
//ruta eliminar ususario
Route::get('/delete/{id}', [App\Http\Controllers\UserController::class,'delete'])->name('DeleteUser');
//ruta vista historial de usuarios
Route::get('users/historial', [App\Http\Controllers\UserController::class, 'historial'])->name('userHistorial');
//restarurar usuarios
Route::get('/restore/{id}', [App\Http\Controllers\UserController::class, 'restore'])->name('userRestore');
//ruta para editarr usuarios
Route::get('edit/users/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::post('edit/users', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

//RUTAS DE PRODUCTS
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
//ruta agregar 
//Route::get('add/products', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct');
//ruta vista tabla
//Route::get('tabla/products', [App\Http\Controllers\ProductController::class, 'tableProduct'])->name('tableProduct');
//ruta para agregar productos
//Route::post('/productos', [App\Http\Controllers\ProductController::class,'store'])->name('product.store');
