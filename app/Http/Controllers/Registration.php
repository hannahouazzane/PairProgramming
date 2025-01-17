<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Registration extends Controller
{
    public function showRegistrationForm(): View {
        return view('registration');
    }
}
