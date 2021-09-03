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

//Route::get('/', [\App\Http\Controllers\Broadcaster\IndexController::class, 'index']);

Route::group(['middleware'=>'auth'],function($route){

  $route->get('/', [\App\Http\Controllers\Broadcaster\IndexController::class, 'index'])
  ->name('index.navigation.status');

  $route->get('/devices', [\App\Http\Controllers\Broadcaster\IndexController::class, 'devices'])
  ->name('index.navigation.devices');

  $route->get('/analyze', [\App\Http\Controllers\Broadcaster\IndexController::class, 'analyze'])
  ->name('index.navigation.analyze');

  $route->get('/logout', [\App\Http\Controllers\Broadcaster\Auth\LoginController::class, 'logout'])
  ->name('auth.logout');

});


//auth login
Route::get('/login', [\App\Http\Controllers\Broadcaster\Auth\LoginController::class, 'index'])->name('auth.login.index');
Route::post('/login', [\App\Http\Controllers\Broadcaster\Auth\LoginController::class, 'post'])->name('auth.login.post');


