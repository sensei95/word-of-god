<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class VideoController extends Controller
{
 public function index()
 {
  $videos = [
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
   ],

  ];
  return view('client.pages.video', compact('videos'));
 }

 public function show()
 {
  return view('client.pages.translation.video');
 }
}
