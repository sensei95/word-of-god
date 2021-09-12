@extends('client.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css">
    <style>
        .video__list{
            background-color: transparent !important;
        }

        .video__list li{
            background-color: transparent !important;
        }

    </style>
@endpush
@push('scripts')
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
    <script src="https://unpkg.com/plyr@3"></script>
    <script>
        // Change the second argument to your options:
        // https://github.com/sampotts/plyr/#options
        const player = new Plyr('video', {captions: {active: true}});
        let selectedVideoId = null;
        let activeVideoId = null;
        let selectedVideoUrl = null;
        let activeVideoUrl = null;
        let videoPlayer = $('#player');

        // player.play()

        $.when($.ready).then(function(){
        //     const videoItem = $('.video__item').each((index) => {
        //         $(this).click()
        // });

            $('.video__item').click(function(){
                selectedVideoId = $(this).attr('data-id');
                selectedVideoUrl = $(this).attr('data-url');
                console.log(player);
               console.log(`id : ${selectedVideoId} url : ${selectedVideoUrl}`);

               player.source = {
                   type: 'video',
                   sources: [
                       {
                           'src': selectedVideoUrl,
                           type: 'video/mp4',
                       }
                   ]
               }

               player.play();
            });
        });





        // Expose player so it can be used from the console
        window.player = player;

    </script>
@endpush

@section('content')
    <div class="container">
        <div class="video-player-container">
            <video id="player" playsinline controls data-poster="{{ asset('images/flash.png') }}">
{{--                <source src="https://wordofgod.ru/files/upload/data/video/20-09-02 Сергей Волков_Мир наших мыслей.mp4" type="video/mp4" />--}}
{{--                <source src="https://wordofgod.ru/files/upload/data/video/20-09-02 Сергей Волков_Мир наших мыслей.flv" type="video/flv" />--}}

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
            </video>
        </div>
        <ul class="list-group list-group-flush video__list my-5">
            @foreach($videos as $i => $video)
                <li class="list-group-item cursor-pointer video__item" data-url="{{$video['url']}}" data-id="{{ $i }}">{{ $video['name'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection
