@extends('client.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css">
@endpush
@push('scripts')
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
    <script src="https://unpkg.com/plyr@3"></script>
    <script>
        // Change the second argument to your options:
        // https://github.com/sampotts/plyr/#options
        const player = new Plyr('video', {captions: {active: true}});

        // Expose player so it can be used from the console
        window.player = player;

    </script>
@endpush

@section('content')
    <div class="container">
        <div class="video-player-container">
            <video id="player" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="https://wordofgod.ru/files/upload/data/video/20-09-02 Сергей Волков_Мир наших мыслей.mp4" type="video/mp4" />
                <source src="https://wordofgod.ru/files/upload/data/video/20-09-02 Сергей Волков_Мир наших мыслей.flv" type="video/flv" />

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
            </video>
        </div>
        <ul class="music__list">
            @for($i=1; $i<21; $i++)
                <li data-url="https://wordofgod.ru/files/upload/data/video/20-09-02 Сергей Волков_Мир наших мыслей.mp4" data-id="{{ $i }}">Сергей Волков "Дело Бога - это убрать препятствие, а дело верующего - двигаться вперед" 2021-09-08</li>
            @endfor
        </ul>

    </div>
@endsection
