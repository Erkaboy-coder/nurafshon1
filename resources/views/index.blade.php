<!DOCTYPE html>
<html lang="en">
<head>
    <title>FC Nurafshon &mdash;Toshkent viloyati jamoasi</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="">

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-logo">
                <a href="#"><img src="{{asset('extra/metallurg.png')}}" alt="Image"></a>
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

                <div class="d-inline-block d-md-none ml-md-0 mr-auto "><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

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
                                            Женщины
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



    <div class="slide-one-item home-slider owl-carousel ">
        <div class="site-blocks-cover overlay" 
        style="background-image: url({{asset('extra/new_ones/photo_2022-02-02_05-48-22.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="bg-text-line">
                            @if (\App::isLocale('uz'))
                               Узбекистон кубоги
                            @endif
                            @if (\App::isLocale('ru'))
                                Команда
                            @endif
                        </h1>
                       <!--  <p>
                            <a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5" style="background-color: #282F89">Batafsil</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" 
        style="background-image: url({{asset('extra/IMG_9759.JPG')}});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="bg-text-line">"Металлург" марказий стадиони</h1>
                        <!-- <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5" style="background-color: #FF8B45">Batafsil</a></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url({{asset('extra/new_ones/photo_2022-02-02_05-47-57.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="bg-text-line">Суперлига </h1>
                       <!--  <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5" style="background-color: #FF8B45">Batafsil</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--<div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">-->
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col-md-6 col-lg-4" >-->
    <!--<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('images/img_1.jpg');">-->
    <!--<div class="text">-->
    <!--<h2 class="h5 text-white">O'zbekiston PEPSI superligasi</h2>-->
    <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>-->
    <!--<p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-6 col-lg-4">-->
    <!--<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('images/img_2.jpg');">-->
    <!--<div class="text">-->
    <!--<h2 class="h5 text-white">O'zbekiston PEPSI superligasi</h2>-->
    <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>-->
    <!--<p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-6 col-lg-4">-->
    <!--<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('images/img_3.jpg');">-->
    <!--<div class="text">-->
    <!--<h2 class="h5 text-white">O'zbekiston PEPSI superligasi</h2>-->
    <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>-->
    <!--<p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <div class="site-blocks-vs site-section bg-light">
        <div class="container">

            @foreach(App\Game::where('is_next',1)->where('league_id',1)->where('is_finish',0)->get() as $game)
                @if ($game->team_home == 8 or $game->team_guest==8)
                    <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">

                        <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                            <h3>
                           
                            @if (\App::isLocale('uz'))
                                Navbatdagi o'yingacha qolgan vaqt:
                            @endif
                            @if (\App::isLocale('ru'))
                                До следующей игры осталось:
                             @endif
                        </h3>
                            <div id="date-countdown"></div>
                        </div>

                        <div class="ml-auto pr-4 order-md-2">
                            <div class="h5 text-black text-uppercase text-center text-lg-left">
                                <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                            <img src="{{asset('storage/'.$game->hometeam->image)}}" alt="Image" class="mr-3 image">                                    <span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">{{$game->hometeam->name}}</span>
                                </div>
                                <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span>
                                <div class="d-block d-md-inline-block">
                                    <img src="{{asset('storage/'.$game->guestteam->image)}}" alt="Image" class="mr-3 image">
                                    <span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">{{$game->guestteam->name}}</span>
                                </div><br>
                                <p class="start_time text-center">{{$game->start_time}}</p>

                            </div>
                        </div>

                    </div>
                @endif

            @endforeach

            <div class="bg-image overlay-success rounded mb-5" style="background-image: url('{{asset('extra/photo_2022-01-22_18-06-28.jpg')}}');" data-stellar-background-ratio="0.5">

                <div class="row align-items-center">
                    @foreach(App\Game::where('is_finish',1)->where('league_id',1)->orderBy('id','DESC')->get()->take(1) as $game)
                        @if($game->team_home == 8 or $game->team_guest == 8)
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                        <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                                <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                                    <img src="{{asset('storage/'.$game->hometeam->image)}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h3 class="h4 mb-0 text-black">{{$game->hometeam->name}}</h3>
                                    <span class="text-uppercase small country text-black">{{$game->hometeam->region}}</span>
                                </div>
                            </div>
                        </div>

                        <?php
                        $hometeamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get());
                        $guestteamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->guestteam->id)->get());
                        ?>
                    </div>
                    <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
                        <div class="d-inline-block">
                            <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">{{$game->league->name}} &mdash; {{$game->type->name}}</small></p>
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">{{$hometeamgoals}}:{{$guestteamgoals}}</span></div>
                            <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">01 dekabr / 16:00 AM</small></p>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4 text-center text-lg-right">
                        <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                                <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                                    <img src="{{asset('storage/'.$game->guestteam->image)}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text order-1">
                                    <h3 class="h4 mb-0 text-black">{{$game->guestteam->name}}</h3>
                                    <span class="text-uppercase small country text-black">{{$game->guestteam->region}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">
                    
                     @if (\App::isLocale('uz'))
                        Oxirgi natijalar
                    @endif
                    @if (\App::isLocale('ru'))
                        Окончательные результаты
                    @endif
                    </h2>
                    <div class="site-block-tab">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        @foreach (App\Game::where('is_finish',1)->get() as $game)
                                            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                                <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                    <div class="text-center text-lg-left">
                                                        <div class="d-block d-lg-flex align-items-center">
                                                            <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                                <img src="{{asset('storage/'.$game->hometeam->image)}}" alt="Image" class="img-fluid">
                                                            </div>
                                                            <?php
                                                            $hometeamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get());
                                                            $guestteamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->guestteam->id)->get());
                                                            ?>
                                                            <div class="text">
                                                                <h3 class="h5 mb-0 text-black">{{$game->hometeam->name}}</h3>
                                                                <span class="text-uppercase small country">{{$game->hometeam->region}}</span>
                                                                {{--@foreach (App\Goal::where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get() as $goal)--}}
                                                                      {{--<p style="font-size: 10px" class="text-danger">{{$goal->player->fio}}({{$goal->time}})</p>--}}
                                                                {{--@endforeach--}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                    <div class="d-inline-block">
                                                        <a href="#" data-target="#exampleModal{{$game->id}}" data-toggle="modal"><div class="bg-black py-2 px-2 mb-2 text-white d-inline-block rounded" ><span class="h5">{{$hometeamgoals}} - {{$guestteamgoals}}</span></div></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                    <div class="">
                                                        <div class="d-block d-lg-flex align-items-center">
                                                            <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                                <img src="{{asset('storage/'.$game->guestteam->image)}}" alt="Image" class="img-fluid">
                                                            </div>
                                                            <div class="text order-1 w-100">
                                                                <h3 class="h5 mb-0 text-black">{{$game->guestteam->name}}</h3>
                                                                <span class="text-uppercase small country">{{$game->guestteam->region}}</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                @foreach(App\Game::where('is_finish',1)->get() as $game)
                    <div class="modal fade" id="exampleModal{{$game->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="text-center modal-title" id="exampleModalLabel">{{$game->hometeam->name}} -- {{$game->guestteam->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>{{$game->hometeam->name}} </h4>
                                            @foreach ($game->hometeam->players as $player)
                                                @if($player->main_id == 1)
                                                    <p style="font-size: 13px" class="text-success">{{$player->fio}}({{$player->player_number}})</p>
                                                @elseif ($player->main_id == 2)
                                                    <p style="font-size: 13px" class="text-primary">{{$player->fio}}({{$player->player_number}})</p>
                                                @endif
                                            @endforeach
                                            <h5>Gollar</h5>
                                            @foreach (App\Goal::where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get() as $goal)
                                                <b style="font-size: 13px">{{$goal->player->fio}}({{$goal->time}})</b>
                                            @endforeach
                                        </div><hr>
                                        <div class="col-md-6">
                                            <h4>{{$game->guestteam->name}}</h4>
                                            @foreach ($game->guestteam->players as $player)
                                                @if($player->main_id == 1)
                                                    <p style="font-size: 13px" class="text-success">{{$player->fio}}({{$player->player_number}})</p>
                                                @elseif ($player->main_id == 2)
                                                    <p style="font-size: 13px" class="text-primary">{{$player->fio}}({{$player->player_number}})</p>
                                                @endif
                                            @endforeach
                                            <h5>Gollar</h5>
                                            @foreach (App\Goal::where('game_id',$game->id)->where('team_id',$game->guestteam->id)->get() as $goal)
                                                <b style="font-size: 13px">{{$goal->player->fio}}({{$goal->time}})</b>
                                            @endforeach
                                        </div>


                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiqish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach








                <div class="col-md-6">

                    <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">
                       
                         @if (\App::isLocale('uz'))
                                Keyingi tur o'yinlari
                        @endif
                            @if (\App::isLocale('ru'))
                                Игры следующего тура
                            @endif
                    </h2>
                    <div class="site-block-tab">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                <div class="row align-items-center">
                                    <div class="col-md-12">

                                        @foreach (App\Game::where('is_finish',0)->get() as $game)
                                            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                <div class="text-center text-lg-left">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                            <img src="{{asset('storage/'.$game->hometeam->image)}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="h5 mb-0 text-black">{{$game->hometeam->name}}</h3>
                                                            <span class="text-uppercase small country">{{$game->hometeam->region}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                <div class="d-inline-block">
                                                    <!-- <div class="bg-black py-2 px-2 mb-2 text-white d-inline-block rounded">
                                                        <span class="h5">//</span>
                                                    </div> -->
                                                    <div class="bg-black py-2 px-2 mb-2 text-white d-inline-block rounded"><span>{{$game->start_time}}</span></div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                <div class="">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                            <img src="{{asset('storage/'.$game->guestteam->image)}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text order-1 w-100">
                                                            <h3 class="h5 mb-0 text-black">{{$game->guestteam->name}}</h3>
                                                            <span class="text-uppercase small country">{{$game->guestteam->region}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        @endforeach
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>
    <hr>

    <div class="container card">
        <div class="row">
            <div class=" col-md-12 text-center">
                <br>
                <h3 class="text text-secondary">
                    @if (\App::isLocale('uz'))
                       Superliga turnir jadvali
                    @endif
                    @if (\App::isLocale('ru'))
                       Расписание турниров Суперлиги
                    @endif
                </h3>
                <hr>
            </div>
                <div class="col-md-1">
                    
                </div>
                 <div class="col-md-10">
                     <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>N</th>
                            <th>Жамоа</th>
                            <th class="text-center">Ўйин</th>
                            <th class="text-center">Ғалаба</th>
                            <th class="text-center">Мағлубият</th>
                            <th class="text-center">Дуранг</th>
                            <th class="text-center">Т-Ф</th>
                            <th class="text-center">Очко</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                         @foreach (App\Match::all() as $match)
                          <tr>
                            <td>{{$i++}}</td>
                            <td style="width: 27%">
                                <img src="{{asset('storage/'.$match->team->image)}}" style="width:14%;height: 30px;">
                                <b class="p-2">{{$match->team->name}}</b>
                            </td>
                            <td class="text-center">{{$match->game}}</td>
                            <td class="text-center">{{$match->win}}</td>
                            <td class="text-center">{{$match->lost}}</td>
                            <td class="text-center">{{$match->equal}}</td>
                            <td class="text-center">{{$match->goaldifference}}</td>
                            <td class="text-center">{{$match->score}}</td>
                          </tr>
                        @endforeach
                          
                          
                        </tbody>
                      </table>
                </div>
                 <div class="col-md-1">
                    
                </div>
        </div>
    </div>
<br>
    <div class="site-section block-13 bg-primary fixed overlay-success bg-image" style="background-image: url('{{asset('extra/new_ones/photo_2022-02-02_05-47-57.jpg')}}');"  data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-white">
                    @if (\App::isLocale('uz'))
                       Foto lavhalar
                    @endif
                    @if (\App::isLocale('ru'))
                       Фотографии
                    @endif
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="nonloop-block-13 owl-carousel">


                    @foreach($fotos as $foto)
                        <div class="item"  style="padding: 5px">
                            <!-- uses .block-12 -->
                            <div class="block-12">
                                <figure>
                                    <img  class="image" src="{{asset('storage/'.$foto->image)}}" style="height:350px;width:100%" alt="Image" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="meta">{{$foto->created_at}}</span>
                                    <div class="text-inner" style="width: 100%">
                                        <h2 class="heading mb-3"><a href="#" class="text-black">{{$foto->image_title}}</a></h2>
                                        <!-- <p>{{$foto->image_slug}}</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
            {{--<div class="text-center" style="width: 100%">--}}
            {{--<a href="#" class="btn btn-warning"style="width: 100%;">Barchasi</a>--}}
            {{--</div>--}}
        </div>

    </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2 class="text-black">
                        @if (\App::isLocale('uz'))
                           Yangiliklar
                        @endif
                        @if (\App::isLocale('ru'))
                           Новости
                        @endif
                        </h2>
                    </div>
                </div>
                <div class="row">

                    @foreach($news as $post)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="post-entry" style="height:610px">
                                <div style="width: 100%;text-align: center;">
                                    <img style="height:390px;width: 100%" src="{{asset('storage/'.$post->news_image)}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text p-4">
                                    <h2 class="h5 text-black"><a href="#">{{$post->news_title}}</a></h2>
                                    <span class="text-uppercase date d-block mb-3"><small>Time:: &bullet; {{$post->created_at}}</small></span>
                                    <!-- <p class="mb-0">{{$post->news_slug}}</p> -->
                                    <!-- <br> -->
                                    <div>
                                        <a href="{{route('show',['id'=>$post->id])}}" class="btn btn-primary">
                                        
                                         @if (\App::isLocale('uz'))
                                           Batafsil 
                                        @endif
                                        @if (\App::isLocale('ru'))
                                          Читать далее
                                        @endif
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <br>
                <div class="text-center" style="width: 100%">
                    <a href="{{route('news')}}" class="btn btn-success"style="width: 100%;">
                         @if (\App::isLocale('uz'))
                            Batafsil 
                        @endif
                        @if (\App::isLocale('ru'))
                            Читать далее
                        @endif
                    </a>
                </div>

            </div>
        </div>




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
                        Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script><i class="" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank" ></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
</div>

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

 <script>
     var siteCountDown = function() {
         var starttime = $('.start_time').text();
         var date = new Date(starttime);
         $('#date-countdown').countdown(date, function(event) {
             var $this = $(this).html(event.strftime(''
                 + '<span class="countdown-block"><span class="label">%w</span> hafta </span>'
                 + '<span class="countdown-block"><span class="label">%d</span> kun </span>'
                 + '<span class="countdown-block"><span class="label">%H</span> soat </span>'
                 + '<span class="countdown-block"><span class="label">%M</span> minut </span>'
                 + '<span class="countdown-block"><span class="label">%S</span> sekund</span>'));
         });

     };
 </script>
</body>
</html>