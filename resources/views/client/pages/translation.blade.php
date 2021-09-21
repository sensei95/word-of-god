@extends('client.layouts.app')

@section('content')
    <div class="container">
        <header class="page_title">ТРАНСЛЯЦИЯ</header>
        <div class="mt-3 row justify-content-center">
            <div class="col-md-8">
                <p>Если у вас нет церкви, куда пойти, мы будем очень рады, если вы присоединитесь к трансляции нашего
                    Богослужения.
                </p>
                <p>Но, если у вас есть пастор и церковь, которую вы поддерживаете, тогда посещайте вашу драгоценную
                    церковь. Стойте с вашим пастором, помогайте ему всем, чем только можете. Поддерживайте его духовно.
                    Поститесь и молитесь за него. Имейте доверие
                    к нему, и Бог поведёт вашу церковь к славному Дню, прихода которого мы все ожидаем.
                </p>
            </div>

            <div class="mt-4 col-md-8">
                <div class="flex-row d-flex justify-content-between">
                    <a class="nav-link tranl" href="{{ route('client.translation.video.show') }}">смотреть</a>
                    <a class="nav-link tranl" href="{{ route('client.translation.audio.show') }}">слушать</a>
                </div>
            </div>

            <div class="mt-5 col-md-8">
                <div class="flex-row d-flex justify-content-between">
                    <a class="archive_btn btn btn-link" href="{{ route('client.video.list') }}">видеоахив</a>
                    <a class="archive_btn btn btn-link" href="{{ route('client.audio.list') }}">аудиоархив</a>
                </div>
            </div>

            <div class="mt-5 col-md-8">
                <p class="text-center">БЛИЖАЙШАЯ ТРАНСЛЯЦИЯ - 22 СЕНТЯБРЯ, СРЕДА, В 19:00</p>
            </div>
        </div>
    </div>
@endsection
