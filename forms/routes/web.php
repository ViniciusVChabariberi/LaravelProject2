<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formsController;

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
    return view('home');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::post('/cadastrar', [formsController::class, 'cadastrar']);
