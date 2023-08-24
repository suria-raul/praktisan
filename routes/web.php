<?php

use App\Http\Controllers\AnyVerbController;
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

Route::get('/basic-route', function () {
    return 'Basic route!';
});

Route::any('/any-verb-here/{param?}', AnyVerbController::class);
