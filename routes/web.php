<?php

use App\Http\Controllers\Guest\PageController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/movies', [PageController::class, 'index'])->name('movies.index');

Route::get('/movie/{id}', [PageController::class, 'show'])->name('movies.show');

Route::get('/movie', function () {
    return redirect('/movies');
});
