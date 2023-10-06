<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\LoginController;
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

// rutas de navegacion (vistas)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/registro', [welcomeController::class, 'goRegistro'])->name("registro");

Route::get('/login', [welcomeController::class, 'goLogin'])->name("login");

Route::get('/perfil', [HomeController::class, 'goPerfil'])->name("perfil");

Route::get('/que_somos', [welcomeController::class, 'goQueSomos'])->name("que_somos");

//rutas de medotos

// Route::get('/', [welcomeController::class, 'index'])->name("welcome.index");

Route::post('/create',[RegistroController::class, 'registrar'])->name('create');

// login

// Ruta para procesar el inicio de sesión de clientes
Route::post('/inicio-sesion', [LoginController::class, 'login'])->name('inicio-sesion');

// Ruta para redirigir a la vista después del inicio de sesión exitoso
Route::view('/home', 'home')->middleware('auth.session')->name('home');
