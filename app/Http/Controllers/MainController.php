<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function terms_conditions()
    {
        return view('terms-and-conditions');
    }
}
