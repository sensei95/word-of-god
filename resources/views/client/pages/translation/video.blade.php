@extends('client.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/video.js') }}"></script>
@endpush

@section('content')
    <div class="container">
        <header class="page_title">ТРАНСЛЯЦИЯ (ВИДЕО)</header>
        <div class="media_player_container">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/3wECErcgfdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
@endsection
