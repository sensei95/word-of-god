<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Journal;

class JournalController extends Controller
{
    public function index()
    {
        return view('client.pages.journal');
    }

    public function show(Journal $journal)
    {
        //
    }

}
