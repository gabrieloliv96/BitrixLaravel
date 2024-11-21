<?php

use App\Http\Controllers\logController;
use App\Http\Controllers\LogsBitrixController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\WebhookClockifyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('webhook')->group(function () {
    Route::post('/bitrix', [WebhookController::class, 'webhookBitrix']);
    Route::post('/clockify', [WebhookClockifyController::class, 'webhookClockify']);
});

// Route::post('/webhook', [WebhookController::class, 'webhook']);

Route::prefix('logsBitrix')->group(function (){
    Route::get('/index',[LogsBitrixController::class, 'index'])->name('logsBitrix.index');
});

Route::prefix('logsBitrix')->group(function (){
    Route::get('/index',[LogsBitrixController::class, 'index'])->name('logsBitrix.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logs', [logController::class, 'index'])->middleware(['auth', 'verified'])->name('logs.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
