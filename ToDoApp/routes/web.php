<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

Route::get('/', [ToDoListController::class, 'index'] );

Route::post('/saveItem', [ToDoListController::class, 'saveItem'])->name('saveItem');
Route::post('/markAsComplete/{id}', [ToDoListController::class, 'markAsComplete'])->name('markAsComplete');
