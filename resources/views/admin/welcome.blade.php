<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
<div class="container">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link  active" href="index.html">главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="translation.html">трансляция</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="journal.html">дневник</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">свидетельсвва</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">поклонение</a>
        </li>
    </ul>
    <div class="col">
        <img class="top-image" src="images/flash.png" alt="word of God">
    </div>
</div>

<div class="jumbortron ">
    <div class="container">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/o.png" width="100%" alt="word of God">
                    </div>
                    <div class="col-md-8 ">

                        <p>"<em>Когда я думаю об Африке, Индии и о всём мире, миллионы язычников кричат и вопиют о
                                милости, и кто пойдёт? Не
                                брошюры им раздавать, но принести им Иисуса Христа. Кто-то в Его Присутствии, как
                                Моисей, который мог бы
                                отправиться туда и показать им истинное избавление. Не заставлять их присоединяться
                                к церкви или пожимать
                                руку и иметь вероучение, но донести их душе избавление; какой-нибудь хороший
                                благочестивый человек."</em>
                        </p>
                        <br>
                        <p class="text-center"><br>БЛАГОСЛОВИТ ВАС ГОСПОДЬ!</p>
                        <p>Если у Вас есть нужда, мы будем рады подвизаться с Вами об этом в молитвах. Если у Вас есть
                            свидетельство о славе Божьей, которым Вы хотели бы поделиться с другими, мы будем рады
                            помочь. Напишите нам:
                        </p>
                        <p class="text-center"><img src="images//info.jpg"></p>
                        <p>И всё это для того, чтобы было доказано, что Иисус Христос вчера, сегодня и вовеки Тот же.
                        </p>
                        <p>&nbsp;</p>
                        <p class="text-center">БЛИЖАЙШАЯ&nbsp;<a href="translation.html" target="_blank&quot;_blank">ТРАНСЛЯЦИЯ</a>
                            - 22 СЕНТЯБРЯ, СРЕДА, В 19:00</p>


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<footer class="footer fixed-bottom">
    <div class="container">
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
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
