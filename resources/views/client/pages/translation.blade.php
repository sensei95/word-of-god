@extends('client.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
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

            <div class="col-md-8 mt-4">
                <div class="d-flex flex-row justify-content-between">
                    <a class="nav-link tranl" href="#">смотреть</a>
                    <a class="nav-link tranl" href="#">слушать</a>
                </div>
            </div>

            <div class="col-md-8 mt-5">
                <div class="d-flex flex-row justify-content-between">
                    <a class="btn btn-link" href="{{ route('video.index') }}">видеоахив</a>
                    <a class="btn btn-link" href="#">аудиоархив</a>
                </div>
            </div>

            <div class="col-md-8 mt-5">
                <p class="text-center">БЛИЖАЙШАЯ ТРАНСЛЯЦИЯ - 22 СЕНТЯБРЯ, СРЕДА, В 19:00</p>
            </div>
        </div>
    </div>
@endsection
