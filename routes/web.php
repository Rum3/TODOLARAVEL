<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoListController::class,'index'])->name('index');
Route::get('/tasks/{id}/edit', [TodoListController::class, 'edit'])->name('edit');
