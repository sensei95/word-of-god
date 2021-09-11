<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.pages.home');
    }
}
