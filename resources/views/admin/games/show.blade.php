
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')

    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Natija</h1>
                </div>
                <div class="card-body" >
                    <!-- Button trigger modal -->

                    <div class="row">
                        <?php
                        $hometeamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get());
                        $guestteamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->guestteam->id)->get());
                        ?>

                        <div class="col-md-5">
                            <ul class="list-group">
                                <li class="list-group-item  text-center"><h3>{{$game->hometeam->name}}</h3></li><br>
                                <li class="list-group-item  text-center">
                                      <?php
                                          $goals = App\Goal::where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get();
                                      ?>
                                    @foreach($goals as $goal)
                                         <p>{{$goal->player->fio}}({{$goal->time}})</p>
                                    @endforeach
                                </li><br>

                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-group">
                                <li class="list-group-item  text-center"><h3 class="text-dark">{{$hometeamgoals}} :  {{$guestteamgoals}}</h3>  </li><br>
                                <a href="{{route('admin.games.index')}}" class="btn btn-primary">O'yinlar ro'yhati</a>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul class="list-group">
                                <li class="list-group-item  text-center"><h3>{{$game->guestteam->name}}</h3>  </li><br>
                                <li class="list-group-item  text-center">
                                    <?php
                                    $goals = App\Goal::where('game_id',$game->id)->where('team_id',$game->guestteam->id)->get();
                                    ?>
                                    @foreach($goals as $goal)
                                        <p>{{$goal->player->fio}}({{$goal->time}})</p>
                                    @endforeach
                                </li><br>
                            </ul>
                        </div>
                    </div>


                            </div>
                        </div>
                    </div>

                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
  @endsection