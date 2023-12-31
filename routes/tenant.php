<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\Auth\LoginRegisterController;




Route::middleware(['web'])->group(function () {

    Route::get('/todo', [TodoListController::class,'index'])->name('index');

    Route::controller(LoginRegisterController::class)->group(function() {
        Route::get('/register', 'register')->name('register');
        Route::get('/', 'login')->name('login');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/logout', 'logout')->name('logout');
    });


    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [TenantController::class, 'show'])->name('admin');
        Route::get('/tenant/{id}', [TenantController::class,'showTenant'])->name('tenant');
        Route::post('/tenants', [TenantController::class,'storeTenant'])->name('tenants.store');
    });
});
 



    
