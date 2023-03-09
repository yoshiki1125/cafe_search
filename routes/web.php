<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', [cafeController::class, 'home'])->name('home');
Route::get('/search', [cafeController::class, 'search']);
Route::get('/search/map/{cafe}', [cafeController::class, 'map']);
Route::get('/register', [CafeController::class, 'register'])->name('register');
Route::post('/register/complete', [CafeController::class, 'complete']);
Route::post('/search/favorite', [CafeController::class, 'favorite']);
Route::post('/search/unfavorite', [CafeController::class, 'unfavorite']);
Route::get('/my_favorite', [CafeController::class, 'my_favorite'])->name('my_favorite');


