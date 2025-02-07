<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Route::get('rents', [RentController::class, 'index'])->middleware(AdminMiddleware::class)->name('rents.index');

/*Route::middleware('auth')->group(function(){
    Route::get('destinations', [DestinationController::class, 'index'])->name('destinations.index');
    //Route::post('destinations', [DestinationController::class, 'store'])->name('cars.store');
}); */

Route::get('destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::middleware(['auth'])->group(function (){
    Route::get('destinations/{id}', [DestinationController::class, 'show'])->name('destinations.show');
});

require __DIR__.'/auth.php';
