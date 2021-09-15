@extends('client.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css">
@endpush
@push('scripts')
    <script src="{{ asset('js/video.js') }}"></script>
@endpush

@section('content')
    <div class="container">
        <header class="page_title">ВИДЕОАРХИВ</header>
        <div class="video_player_container">
            <figure class="video_player" id="video_player" data-current="1">

                <video controls>
                    <source src="{{ $videos[0]['url'] }}" type="video/mp4" />
                </video>
                <div class="video_controls">
                    <button id="prev_btn" class="btn btn-primary"><i class="bi bi-caret-left"></i></button>
                    <button id="next_btn" class="btn btn-primary"><i class="bi bi-caret-right"></i></button>
                </div>
                <figcaption>
                    <h2 class="video_current_title">{{ $videos[0]['name'] }}</h2>
                    <ul class="list-group list-group-flush video__list my-5">
                        @foreach($videos as $i => $video)
                        <li class="list-group-item cursor-pointer video_item {{ ($i + 1) == 1 ? 'active_video' : '' }}">
                            <a
                                class="video_link"
                                href="{{ $video['url'] }}"
                                id="video_{{ ($i + 1) }}"
                                data-id="{{ ($i + 1) }}"
                            >
                                <i class="bi bi-caret-right-fill play_icon"></i>
                                {{ $video['name'] }}
                            </a
                            >
                            <a class="video_download_btn" href="{{ $video['url'] }}" download="">
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
