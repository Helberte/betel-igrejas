<?php

use Illuminate\Support\Facades\Route;

//controllers

use App\Http\Controllers\Dashboard;

Route::get('/', [Dashboard::class, 'index']);
