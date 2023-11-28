<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckSetup;
use App\Http\Controllers\SetupController;

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

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/', function () {
        return "Dashboard Page";
    });
 
    Route::get('/dashboard', function () {
        return "Dashboard Page";
    });
});

Route::middleware([CheckSetup::class])->group(function () {
    Route::get('/login', function (){
        return "Login Page";
    })->name("login");

    Route::get('/setup/', [SetupController::class, 'index']);
    Route::get('/setup/{step}', [SetupController::class, 'index'])->name('setup.index');
    Route::post('/setup', [SetupController::class, 'store'])->name('setup.store');
});

