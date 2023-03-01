<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/edit/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

