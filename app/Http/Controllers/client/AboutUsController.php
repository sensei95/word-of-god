<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('client.pages.about');
    }
}
