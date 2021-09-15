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
            ],[
                'url' => 'https://github.com/sensei95/word-of-god-video-player/blob/main/videos/Beach%20-%2079773.mp4',
                'name' => 'Beach - 79773'
            ],[
                'url' => 'https://github.com/sensei95/word-of-god-video-player/blob/main/videos/Flowers%20-%2072763.mp4',
                'name' => 'Flowers - 72763'
            ],[
                'url' => 'https://github.com/sensei95/word-of-god-video-player/blob/main/videos/Record%20-%2065390.mp4',
                'name' => 'Record - 2065390'
            ],

        ];
        return view('client.pages.video', compact('videos'));
    }

    public function show(Video $video)
    {
        //
    }
}
