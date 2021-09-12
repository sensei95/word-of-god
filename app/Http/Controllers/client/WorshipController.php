<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Worship;

class WorshipController extends Controller
{

    public function index()
    {
        return view('client.pages.worship');
    }

    public function show(Worship $worship)
    {
        //
    }
}
