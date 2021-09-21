@extends('client.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/video.js') }}"></script>
@endpush

@section('content')
    <div class="container">
        <header class="page_title">СВИДЕТЕЛЬСТВА</header>
        <div class="media_player_container">
            <figure class="media_player" id="video_player" data-current="1">

                <video controls>
                    <source src="{{ $testimonials[0]['url'] }}" type="video/mp4" />
                </video>
                <div class="media_controls">
                    <button id="prev_btn" class="btn btn-primary"><i class="bi bi-caret-left"></i></button>
                    <button id="next_btn" class="btn btn-primary"><i class="bi bi-caret-right"></i></button>
                </div>
                <figcaption>
                    <h2 class="media_current_title">{{ $testimonials[0]['name'] }}</h2>
                    <ul class="my-5 list-group list-group-flush media__list">
                        @foreach($testimonials as $i => $testimony)
                        <li class="list-group-item cursor-pointer media_item {{ ($i + 1) == 1 ? 'active_media' : '' }}">
                            <a
                                class="media_link"
                                href="{{ $testimony['url'] }}"
                                id="video_{{ ($i + 1) }}"
                                data-id="{{ ($i + 1) }}"
                            >
                                <i class="bi bi-caret-right-fill play_icon"></i>
                                {{ $testimony['name'] }}
                            </a
                            >
                            <a class="media_download_btn" href="{{ $testimony['url'] }}" download="">
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
