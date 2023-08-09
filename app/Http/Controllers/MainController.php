<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function terms_conditions()
    {
        return view('terms-and-conditions');
    }
    public function return_policy()
    {
        return view('return-refund-policy');

    }
    public function privacy_policy()
    {
        return view('privacy-policy');

    }
    public function contact_us()
    {
        return view('contact-us');

    }
}
