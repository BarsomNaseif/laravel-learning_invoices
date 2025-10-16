<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\invoices;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\SectionsController;

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
//Auth::routes(['register' => false]);
require __DIR__ . '/auth.php';
Route::get('/invoices', [InvoicesController::class, 'index']);
Route::resource('sections', SectionsController::class);

Route::get('/{page}', [AdminController::class, 'index']);
