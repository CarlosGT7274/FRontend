<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\HomeController;
use App\Livewire\Counter;
 

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
/** @var Router $router */

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/prin', 'HomeController@show');
// Route::get('/hola', 'HomeController@index');
Route::controller(HomeController::class)->group(function () {
    Route::get('/hola', 'index');
    Route::get('/prin', 'indexShow');
  });

Route::get('/counter', Counter::class);
// Route::get('/hola', [HomeController::class, 'index']);
// $router->get('/prin', 'HomeController@show');
// $router->get('/hola', 'HomeController@index');
