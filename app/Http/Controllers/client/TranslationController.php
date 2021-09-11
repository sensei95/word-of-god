<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Translation;

class TranslationController extends Controller
{

    public function index()
    {
        return view('client.pages.translation');
    }

    public function show(Translation $translation)
    {
        //
    }
}
