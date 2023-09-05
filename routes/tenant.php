<?php

declare(strict_types=1);

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\Auth\LoginRegisterController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;




Route::middleware([
    'web',
])->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
    
  Route::get('/admin',[TenantController::class,'show'])->name('admin');
    
    Route::controller(LoginRegisterController::class)->group(function() {
        Route::get('/register', 'register')->name('register');
        Route::post('/store', 'store')->name('store');
        Route::get('/login', 'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/logout', 'logout')->name('logout');
    });
    // Route::get('/', [TodoListController::class,'index'])->name('index');
    Route::get('/tenant', [TenantController::class,'showTenant'])->name('tenant');
    Route::post('/tenants', [TenantController::class,'storeTenant'])->name('tenants.store');
});
