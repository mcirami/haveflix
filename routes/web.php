<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', [Controller::class, 'homePage'])->name('home');

Route::get('/dashboard', [Controller::class, 'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('verify-login/{token}', [AuthController::class, 'verifyLogin'])->name('verify-login');

Route::get('/offline', function () {
    return view('vendor/laravelpwa/offline');
});

Route::post('/custom-register', [RegisteredUserController::class, 'store'])->name('custom.register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
