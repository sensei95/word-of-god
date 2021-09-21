@extends('client.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/audio.js') }}"></script>
@endpush

@section('content')
    <div class="container">
        <header class="page_title">АУДИОАРХИВ</header>
        <div class="media_player_container">
            <figure class="media_player" id="audio_player" data-current="1">

                <audio controls>
                    <source src="{{ $songs[0]['url'] }}" type="audio/mp4" />
                </audio>
                <div class="media_controls">
                    <button id="prev_btn" class="btn btn-primary"><i class="bi bi-caret-left"></i></button>
                    <button id="next_btn" class="btn btn-primary"><i class="bi bi-caret-right"></i></button>
                </div>
                <figcaption>
                    <h2 class="media_current_title">{{ $songs[0]['name'] }}</h2>
                    <ul class="my-5 list-group list-group-flush media__list">
                        @foreach($songs as $i => $song)
                        <li class="list-group-item cursor-pointer media_item {{ ($i + 1) == 1 ? 'active_media' : '' }}">
                            <a
                                class="media_link"
                                href="{{ $song['url'] }}"
                                id="audio_{{ ($i + 1) }}"
                                data-id="{{ ($i + 1) }}"
                            >
                                <i class="bi bi-caret-right-fill play_icon"></i>
                                {{ $song['name'] }}
                            </a
                            >
                            <a class="media_download_btn" href="{{ $song['url'] }}" download="">
                                <i class="bi bi-download"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </figcaption>
            </figure>
        </div>
    </div>
@endsection
