<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class AudioController extends Controller
{
 public function index()
 {
  $songs = [
   [
    'url'  => 'https://wordofgod.ru/files/upload/data/video/21-09-08 Сергей Волков_Дело Бога - это убрать препятствие, а дело верующего - двигаться вперед.mp4',
    'name' => 'Сергей Волков Мир наших мыслей.',
   ],
   [
    'url'  => 'https://wordofgod.ru/files/upload/data/video/21-09-05 Сергей Волков_Открытие семи печатей - это прорыв через звуковой барьер.mp4',
    'name' => 'Сергей Волков Мысль, решение, поступок.',
   ],
   [
    'url'  => 'https://wordofgod.ru/files/upload/data/video/21-09-01 Сергей Волков_Посвяти себя Богу ради тех, кого хочешь привести ко Христу.mp4',
    'name' => 'Сергей Волков Мысль, решение, поступок.',
   ], [
    'url'  => 'https://github.com/sensei95/word-of-god-video-player/blob/main/videos/Beach%20-%2079773.mp4',
    'name' => 'Beach - 79773',
   ], [
    'url'  => 'https://github.com/sensei95/word-of-god-video-player/blob/main/videos/Flowers%20-%2072763.mp4',
    'name' => 'Flowers - 72763',
   ], [
    'url'  => 'https://github.com/sensei95/word-of-god-video-player/blob/main/videos/Record%20-%2065390.mp4',
    'name' => 'Record - 2065390',
   ],

  ];
  return view('client.pages.audio', compact('songs'));
 }

 public function show()
 {
  return view('client.pages.translation.audio');
 }
}
