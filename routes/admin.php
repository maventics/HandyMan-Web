<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;

// Admin authentication routes
Route::get('login', [AdminAuthController::class, 'LoginForm'])->name('admin.login.form');
Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('admin.profile');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('admin.settings');
    Route::post('/profile/update', [ProfileController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::post('/password/update', [ProfileController::class, 'settings'])->name('admin.password.update');

    
    Route::post('logout', [DashboardController::class, 'logout'])->name('admin.logout');

});
