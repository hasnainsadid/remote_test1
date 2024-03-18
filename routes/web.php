<?php

use App\Http\Controllers\AllUserController;
use App\Models\AllUser;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AllUserController::class, 'index'])->name('dashboard');

    Route::get('/add_user', [AllUserController::class, 'create'])->name('add_user');
    
    Route::post('/submit_user', [AllUserController::class, 'store'])->name('submit_user');
    
    Route::get('/show_user/{id}', [AllUserController::class, 'show'])->name('show_user');
});


