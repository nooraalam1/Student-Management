<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('AdminDashboard.adminDash');
})->middleware(['auth', 'role:admin'])->name('dashboard');


Route::get('/student/dashboard',[StudentController::class,'index'])->middleware(['auth','role:user'])->name('StudentDash');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
