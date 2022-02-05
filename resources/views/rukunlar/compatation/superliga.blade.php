@extends('master')

@section('title','Super liga')
@section('header','Super liga')


@section('content')
    <div class="site-section site-blocks-vs">
        <div class="container">
            <div class="row">
                @foreach(App\Game::where('is_finish',1)->where('league_id',$league->id)->orderBy('id','DESC')->get()->take(1) as $game)
                    @if($game->team_home == 1 or $game->team_guest == 1 and $game->league_id == $league->id)
                <div class="col-md-12">
                    <div class="bg-image overlay-success rounded mb-5" style="background-image: url('images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">

                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                                <div class="text-center text-   lg-left">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                                            <img src="{{asset('storage/'.$game->hometeam->image)}}" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="text">
                                            <h3 class="h5 mb-0 text-black">{{$game->hometeam->name}}</h3>
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
                                    <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">{{$game->start_time}}</small></p>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-4 text-center text-lg-right">
                                <div class="">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                                            <img src="{{asset('storage/'.$game->guestteam->image)}}" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="text order-1">
                                            <h3 class="h5 mb-0 text-black">{{$game->guestteam->name}}</h3>
                                            <span class="text-uppercase small country text-black">{{$game->guestteam->region}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                 @endif
                  @endforeach
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
                        <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                            <h3>Navbatdagi o'yingacha qolgan vaqt:</h3>
                            <div id="date-countdown"></div>
                        </div>
                        @foreach(App\Game::where('is_finish',0)->where('league_id',$league->id)->get() as $game)
                            @if ($game->team_home == 8 or $game->team_guest==8)
                        <div class="ml-auto pr-4 order-md-2">
                            <div class="h5 text-black text-uppercase text-center text-lg-left">
                                <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                                    <img src="{{asset('storage/'.$game->hometeam->image)}}" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">{{$game->hometeam->name}}</span>
                                </div>
                                <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span>
                                <div class="d-block d-md-inline-block">
                                    <img src="{{asset('storage/'.$game->guestteam->image)}}" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">{{$game->guestteam->name}}</span>
                                </div><br>
                                <p class="start_time text-center">{{$game->start_time}}</p>

                            </div>
                        </div>
                         @endif
                         @endforeach


                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-md-12">

                    <?php
                     $games =App\Game::where('is_finish',1)->where('league_id',$league->id)->paginate(5);
                    ?>
                    <!-- END row -->
                    @foreach ($games as $game)
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
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                            <div class="d-inline-block">
                                <a href="#"  data-target="#exampleModal{{$game->id}}" data-toggle="modal"><div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">{{$hometeamgoals}}:{{$guestteamgoals}}</span></div></a>
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
                    </div>
                    @endforeach



                        @foreach(App\Game::where('is_finish',1)->where('league_id',$league->id)->get() as $game)
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
                                                        <p style="font-size: 13px" class="text-danger">{{$goal->player->fio}}({{$goal->time}})</p>
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
                    <!-- END row --><br>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        {{$games->links()}}
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')
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
@stop