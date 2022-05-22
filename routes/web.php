<?php

use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\Personajes;
use App\Models\Habilidades;
use App\Models\Categoria;
use App\Models\Tips;

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
Route::get('/roles', function () {
    return Roles::All();
});
Route::get('/personajes', function () {
    return Personajes::All();
});
Route::get('/habilidades', function () {
    return Habilidades::All();
});
Route::get('/categoria', function () {
    return Categoria::All();
});
Route::get('/tips', function () {
    return Tips::All();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
