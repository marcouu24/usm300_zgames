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

Route::view("home","home")->name("home");

Route::view("registrar_consola","registrar_consola")->name("registrar_consola");

Route::view("/registrar_juego","registrar_juego")->name("registrar_juegos");

Route::view("/ver_consolas","ver_consolas")->name("ver_consolas");

Route::view("/ver_juegos","ver_juegos")->name("ver_juegos");



/* Route::get('/', function () {
    return view('registrar_juego');
});

Route::get("/registrar_juego", function () {
    return view("registrar_juego");
});

Route::get("/registrar_consola", function () {
    return view("registrar_consola");
});

Route::get("/ver_consolas", function () {
    return view("ver_consolas");
});

Route::get("/ver_juegos", function () {
    return view("ver_juegos");
}); */