<?php

use Illuminate\Support\Facades\Route;
use App\Models\generos;
use App\Models\albumes;
use App\Models\artistas;
use App\Models\c_escuchadas;
use App\Models\canciones;
use App\Models\l_reproduccion;
use App\Models\users;

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
    return view('welcome');
});
Route::get('/generos', function () {
    return generos::All();
});
Route::get('/albumes', function () {
    return albumes::All();
});
Route::get('/artistas', function () {
    return artistas::All();
});
Route::get('/c_escuchadas', function () {
    return c_escuchadas::All();
});
Route::get('/canciones', function () {
    return canciones::All();
});
Route::get('/l_reproduccion', function () {
    return l_reproduccion::All();
});
Route::get('/users', function () {
    return users::All();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
