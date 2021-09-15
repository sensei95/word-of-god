<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    @stack('styles')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div class="container header">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="{{route('client.home')}}">
            <img src="{{ asset('images/o.png') }}" width="50" height="50" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#togglePhone"
                aria-controls="togglePhone" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-center" id="togglePhone">
            <ul class="navbar-nav">
                <li>
                    <a class="nav-link {{(request()->routeIs('client.home')?'active':'')}}"
                       href="{{route('client.home')}}">главная</a>
                </li>
                <li>
                    <a class="nav-link {{(request()->routeIs('client.translation.index')?'active':'')}}"
                       href="{{route('client.translation.index')}}">трансляция</a>
                </li>
                <li>
                    <a class="nav-link {{(request()->routeIs('client.journal.index')?'active':'')}}"
                       href="{{route('client.journal.index')}}">дневник</a>
                </li>
                <li>
                    <a class="nav-link {{(request()->routeIs('client.testimony.index')?'active':'')}}"
                       href="{{route('client.testimony.index')}}">свидетельсвва</a>
                </li>
                <li>
                    <a class="nav-link {{(request()->routeIs('client.worship.index')?'active':'')}}"
                       href="{{route('client.worship.index')}}">поклонение</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="banner my-5">
        <img src="{{ asset('images/flash.png') }}" alt="">
    </div>
</div>
{{--<div id="app">--}}
@yield("content")
{{--</div>--}}

<footer class="footer fixed-bottom">
    <div class="container footer">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link footer-link " href="index.html">фото</a>
            </li>
            <li class="nav-item">
                <a class="nav-link footer-link" href="#">о нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link footer-link" href="journal.html">контакты</a>
            </li>
        </ul>
        <p class="text-center copyright mt-2">&copy;Copyright </p>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@stack('scripts')
</body>
</html>
