<?php

// use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::fallback(function () {return redirect('/');});

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login', LoginController::class)->middleware('throttle:10')->name('login.attempt');


Route::middleware(['auth'])->group(function () {        
    Route::view('register', 'auth.register')->name('register');
    Route::post('register', RegisterController::class)->name('register.store');
    
    Route::view('/', 'app.dashboard')->name('dashboard');
    
    Route::post('logout', function () {
        Auth::guard('web')->logout();
        Session::invalidate();
        Session::regenerateToken();
        return redirect('/');
    })->name('logout');
});


