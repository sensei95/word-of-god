<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Testimony;

class TestimonyController extends Controller
{
 public function index()
 {
  $testimonials = [
   [
    'name' => 'Свидетельства 2019-07-14',
    'url'  => 'https://wordofgod.ru/downloads/files/upload/data/video/19-07-14_Вечеря_Свидетельства.mp4',
   ], [
    'name' => 'Свидетельства (вечер) 2018-11-04',
    'url'  => 'https://wordofgod.ru/downloads/files/upload/data/video/18-11-04_2 Свидетельства (вечер).mp4',
   ], [
    'name' => 'Причастие "Свидетельство Алексея Белова" 2018-08-12',
    'url'  => 'https://wordofgod.ru/downloads/files/upload/data/video/18-08-12 Причастие_Свидетельство А. Белова.mp4',
   ],
  ];

  return view('client.pages.testimony', compact('testimonials'));

 }

 public function show(Testimony $testimony)
 {
  //
 }
}
