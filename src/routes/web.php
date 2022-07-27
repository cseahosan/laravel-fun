<?php

use Ahosan\Fun\Http\Controllers\FunController;
use Illuminate\Support\Facades\Route;

Route::get('fun', [FunController::class, 'makeFun']); 