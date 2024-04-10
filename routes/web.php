<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



use App\Http\Controllers\AnunciarController;
use App\Http\Controllers\ManunciadosController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index']);

// Outras rotas protegidas por autenticação do Sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [DashboardController::class, 'index']);
    // Outras rotas protegidas por autenticação do Sanctum
   
});


// Rota para exibir o formulário de anúncio
Route::get('/anunciar', [AnunciarController::class, 'showForm'])->name('anunciar.form');

// Rota para processar os dados do formulário de anúncio
Route::post('/anunciar', [AnunciarController::class, 'store'])->name('anunciar.store');

// Rota para exibir os imóveis anunciados pelo usuário autenticado
Route::middleware('auth')->get('/MeusAnunciados/{id}/{Imovel}', [ManunciadosController::class, 'index'])->name('MeusAnunciados.index');

Route::get('/', function () {
    return view('welcome');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


