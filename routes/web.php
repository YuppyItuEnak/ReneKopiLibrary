<?php

use App\Http\Controllers\ReneController;
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

Route::get('/', [ReneController::class, 'home']);
Route::get('/home', [ReneController::class, 'home']);
Route::get('/coffees', [ReneController::class, 'coffee']);
Route::get('/coffees/{code}', [ReneController::class, 'showcoffee']);
Route::get('/noncoffees', [ReneController::class, 'noncoffee']);
Route::get('/noncoffees/{code}', [ReneController::class, 'shownoncoffee']);
Route::get('/foodnsnacks', [ReneController::class, 'food']);
Route::get('/foodnsnacks/{code}', [ReneController::class, 'showfood']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';
