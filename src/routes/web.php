<?php

use Ahosan\Fun\Http\Controllers\FunController;
use Illuminate\Support\Facades\Route;

Route::get('hahaha', [FunController::class, 'makeFun']); 