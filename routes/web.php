<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Registration;

Route::get('/registration', [Registration::class, 'showRegistrationForm']);
