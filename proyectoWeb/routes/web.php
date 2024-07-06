<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home.index')->middleware('auth');

Route::middleware(['auth'])->group(function(){
    Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios.index');
    Route::get('/usuarios/contrasena',[UsuariosController::class,'contrasena'])->name('usuarios.contrasena');
    Route::get('/usuarios/crear',[UsuariosController::class,'create'])->name('usuarios.create');
    Route::post('/usuarios/crear',[UsuariosController::class,'store'])->name('usuarios.store');
    Route::get('/usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');
});

Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('/usuarios/autenticar',[UsuariosController::class,'autenticar'])->name('usuarios.autenticar');
