<?php

use App\Http\Controllers\AnyVerbController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
})->name('home');

Route::get('/basic-route', function () {
    return 'Basic route!';
});

Route::get('/check-auth', function () {
    return response()->json(
        [
            'is_logged_in' => session('logged_in'),
            'logged_in' => auth()->check(),
        ]
    );
});

Route::view('/login', 'login')->name('viewLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/logged-in', [AuthController::class, 'loggedIn'])->name('logged_in')->middleware(['auth', 'auth.session']);

Route::post('/checker', [AuthController::class, 'checker']);

Route::any('/any-verb-here/{param?}', AnyVerbController::class);
