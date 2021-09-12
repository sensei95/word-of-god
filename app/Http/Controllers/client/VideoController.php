<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = [
            [
                'url' => 'https://wordofgod.ru/files/upload/data/video/20-09-02 Сергей Волков_Мир наших мыслей.mp4',
                'name' => 'Сергей Волков Мир наших мыслей.'
            ],
            [
                'url' => 'https://wordofgod.ru/files/upload/data/video/20-09-06 Сергей Волков_Мысль, решение, поступок.mp4',
                'name' => 'Сергей Волков Мысль, решение, поступок.'
            ]
        ];
        return view('client.pages.video', compact('videos'));
    }

    public function show(Video $video)
    {
        //
    }
}
