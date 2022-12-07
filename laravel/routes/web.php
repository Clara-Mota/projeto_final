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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/cadastros/cadastroprofissional', [EventController::class, 'cadastroprofissional']);
Route::get('/cadastros/cadastropet', [EventController::class, 'cadastropet']);
Route::get('/cadastros/agendamento', [EventController::class, 'agendamento']);
Route::post('/cadastros',[EventController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/agenda', function () {
    return view('agenda');
});