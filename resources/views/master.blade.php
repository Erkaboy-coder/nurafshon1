<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!--calendar-->
    <link href="{{asset('lib/vanillaCalendar.css')}}" rel="stylesheet">
    <!--calendar-->


</head>
<body >

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-logo">
                <a href="{{route('home_page')}}"><img src="{{asset('extra/metallurg.png')}}" style="height: 150px" alt=""></a>
            </div>
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

            <header class="site-navbar absolute transparent" role="banner">
        <div class="py-3">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3">
                        <a href="https://t.me/metallurguz" target="_blank" class="text-secondary px-2 pl-0">
                            <span class="icon-telegram"></span>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100034732916965" target="_blank" class="text-secondary px-2"><span class="icon-facebook"></span></a>
                        <a href="https://www.instagram.com/pfcmetallurguz/" target="_blank" class="text-secondary px-2">
                            <span class="icon-instagram"></span>
                        </a>
                         <a href="https://www.instagram.com/pfcmetallurguz/" target="_blank" class="text-secondary px-2"><span class="icon-youtube"></span></a>
                    </div>
                    <div class="col-6 col-md-9 text-right">
                        <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">pfk.metallurg@mail.ru</span></a></div>
                        <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+998 70 913 00 88</span></a></div>
                        <div class="d-inline-block" style="padding: 10px">

                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a style="padding: 10px" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>

                                @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <nav class="site-navigation position-relative text-right text-md-right " style="background-color: #282F89" role="navigation">
            <div class="container position-relative">
                <div class="site-logo">
                    <a href="{{route('home_page')}}"><img src="{{asset('extra/metallurg.png')}}" style="height: 130px" alt=""></a>
                </div>

                <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-md-block">

                    <li class=" active">
                        <a href="{{route('home_page')}}">
                        @if (\App::isLocale('uz'))
                                Bosh sahifa
                        @endif
                            @if (\App::isLocale('ru'))
                                Домашняя страница
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{route('news')}}">
                            @if (\App::isLocale('uz'))
                                Yangiliklar
                            @endif
                            @if (\App::isLocale('ru'))
                                    Новости
                            @endif
                        </a></li>

                    <li class="has-children">
                        <a href="#">

                            @if (\App::isLocale('uz'))
                                Klub
                            @endif
                            @if (\App::isLocale('ru'))
                                    Клуб
                            @endif
                        </a>
                        <ul class="dropdown arrow-top">
                            <li><a href="{{route('club_history')}}">
                                    @if (\App::isLocale('uz'))
                                        Klub tarixi
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            История клуба
                                    @endif
                                </a></li>
                            <li><a href="{{route('club_wins')}}">
                                    @if (\App::isLocale('uz'))
                                        Yutuqlar
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Достижения
                                    @endif
                                </a></li>
                            <li><a href="{{route('stadion')}}">
                                    @if (\App::isLocale('uz'))
                                        Stadion
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Cтадион
                                    @endif
                                </a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="#">
                            @if (\App::isLocale('uz'))
                                Jamoa
                            @endif
                            @if (\App::isLocale('ru'))
                                    Команда
                            @endif
                        </a>
                        <ul class="dropdown arrow-top">
                            <li><a href="{{route('management')}}">
                                    @if (\App::isLocale('uz'))
                                        Rahbariyat
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Управление
                                    @endif
                                </a></li>
                            <li><a href="{{route('coaches')}}">
                                    @if (\App::isLocale('uz'))
                                        Murabbiylar
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Тренеры
                                    @endif
                                </a></li>
                            <li><a href="{{route('workers')}}">
                                    @if (\App::isLocale('uz'))
                                        Xodimlar
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Персонал
                                    @endif
                                </a></li>
                                
                                <li><a href="{{route('all_players')}}">
                                    @if (\App::isLocale('uz'))
                                        Tarkib
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Содержание
                                    @endif
                                </a></li>

                            <li><a href="{{route('team')}}">
                                    @if (\App::isLocale('uz'))
                                        Asosiy tarkib
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Основное содержание
                                    @endif
                                </a></li>
                            <!-- <li><a href="{{route('youngs')}}">
                                    @if (\App::isLocale('uz'))
                                        Yoshlar
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Молодежи
                                    @endif
                                </a></li> -->
                                <li><a href="{{route('u21')}}">
                                    @if (\App::isLocale('uz'))
                                        U-21
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            U-21
                                    @endif
                                </a></li>
                                 <li><a href="{{route('u18')}}">
                                    @if (\App::isLocale('uz'))
                                        U-18
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            U-18
                                    @endif
                                </a></li>
                            
                            <li><a href="{{route('futzal')}}">
                                    @if (\App::isLocale('uz'))
                                        Futzal
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Futzal
                                    @endif
                                </a></li>

                                <li><a href="{{route('women')}}">
                                    @if (\App::isLocale('uz'))
                                        Ayollar
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Женщины
                                    @endif
                                </a></li>
                        </ul>
                    
                    </li>


                    <li class="has-children">
                        <a href="#">
                            @if (\App::isLocale('uz'))
                                Musobaqalar
                            @endif
                            @if (\App::isLocale('ru'))
                                    Соревнования
                            @endif
                        </a>
                        <ul class="dropdown arrow-top">
                            @foreach (App\League::all() as $league)
                                <li><a href="{{route('league',['id'=>$league->id])}}">{{$league->name}}</a></li>
                            @endforeach

                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="#">
                            @if (\App::isLocale('uz'))
                                Media
                            @endif
                            @if (\App::isLocale('ru'))
                                Медиа
                            @endif
                        </a>
                        <ul class="dropdown arrow-top">
                            <li><a href="{{route('fotos')}}">
                                    @if (\App::isLocale('uz'))
                                        Foto
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Фотографии
                                    @endif
                                </a></li>
                            <li><a href="{{route('video')}}">
                                    @if (\App::isLocale('uz'))
                                        Video
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Видео
                                    @endif
                                </a></li>
                            <!--<li><a href="#">So'rovnoma</a></li>-->
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="#">Akademiya</a>
                        <ul class="dropdown arrow-top">
                            <li><a href="{{route('about_academy')}}">
                                    @if (\App::isLocale('uz'))
                                        Akademiya haqida
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Об Академии
                                    @endif
                                </a></li>
                            <li><a href="{{route('academy_members')}}">
                                    @if (\App::isLocale('uz'))
                                        Xodimlar ro'yhati
                                    @endif
                                    @if (\App::isLocale('ru'))
                                            Штатное расписание
                                    @endif
                                </a></li>
                        </ul>
                    </li>

                    <!--<li><a href="matches.html">Matches</a></li>-->
                    <!--<li><a href="team.html">Team</a></li>-->
                    <!--<li><a href="about.html">About</a></li>-->
                    <li><a href="{{route('contact')}}">
                            @if (\App::isLocale('uz'))
                                Aloqa
                            @endif
                            @if (\App::isLocale('ru'))
                                Сонтаст
                            @endif
                        </a></li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="site-blocks-cover overlay" 
    style="background-image: url({{asset('extra/new_ones/photo_2022-02-02_05-48-22.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="bg-text-line">@yield('header')</h1>
                </div>
            </div>
        </div>
    </div>

    @yield('content')



        <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">

                    <h3 class="footer-heading mb-4">FC Металлург</h3>
                    <div class="site-mobile-menu-logo">
                        <a href="{{route('home_page')}}"><img src="{{asset('extra/metallurg.png')}}" style="height: 150px" alt=""></a>

                    </div>
                    <p>
                        Manzil: Toshkent viloyati, Bekobod shaxri.
                        <br>
                        Tel: +998 70 913 00 88
                    </p>

                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Ijtimoiy tarmoqlar</h3>

                        <div>
                            <a href="https://t.me/metallurguz" class="pl-0 pr-3"><span class="icon-telegram"></span></a>
                            <a href="https://www.facebook.com/profile.php?id=100034732916965" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/pfcmetallurguz/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                             <a href="#" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                        </div>
                    </div>

                </div>

                <div class="col-4">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Menyu</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Bosh sahifa</a></li>
                            <li><a href="#">Yangililar</a></li>
                            <li><a href="#">Klub tarixi</a></li>
                            <li><a href="#">Yutuqlar</a></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="col-4">
                    <h3 class="footer-heading mb-2">Bog'lanish</h3>
                    <p>Bir bilan bog'lanishingzi mumkin bo'ladi</p>

                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"  style="background-color: #FF8B45" id="button-addon2">Yuborish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script><i class= aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank" ></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="{{asset('lib/vanillaCalendar.js')}}" type="text/javascript"></script>
<script>
    window.addEventListener('load', function () {
        vanillaCalendar.init({
            disablePastDays: true
        });
    });
</script>



<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
@yield('scripts', 'scripts')


</body>
</html>