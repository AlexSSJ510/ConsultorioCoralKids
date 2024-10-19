<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservarController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'Inicio')->name('home');
Route::view('IniciarSesion', 'IniciarSesion')->name('iniciarsesion');
Route::view('Historial','Historial')->name('historial');
Route::get('reservar', [ReservarController::class, 'Formulario'])->name('reservar');
Route::view('login')
Route::post('reservar', [ReservarController::class, 'Store'])->name('store');
