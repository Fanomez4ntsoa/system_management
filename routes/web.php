<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Members\MembersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

$router->group(['prefix' => 'auth'], function($router) {
    $router->get('/login', [AuthController::class, 'showLogin']);
    $router->post('/login', [AuthController::class, 'login'])->name('login.post');
    $router->get('/register', [AdminController::class, 'showRegister'])->name('register');
    $router->post('/register', [AdminController::class, 'create'])->name('register.post');
});

$router->group(['prefix' => 'dashboard'], function($router) {
    $router->get('/', [MembersController::class, 'index'])->name('dashboard');
});

// Route::prefix('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/login', [AuthController::class, 'login']);
