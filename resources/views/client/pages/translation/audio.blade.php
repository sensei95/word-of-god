@extends('client.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/video.js') }}"></script>
@endpush

@section('content')
    <div class="container">
        <header class="page_title">ТРАНСЛЯЦИЯ ( АУДИО)</header>
    </div>
@endsection
