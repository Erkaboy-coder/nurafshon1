
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')

    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Update Game</h1>
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
                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#home">
                                              <i class="fa fa-soccer-ball-o">Goal</i>
                                         </button>
                                     </ul>
                                 </div>
                                <div class="col-md-2">
                                     <ul class="list-group">
                                         <li class="list-group-item  text-center"><h3 class="text-dark">{{$hometeamgoals}} :  {{$guestteamgoals}}</h3>  </li><br>
                                         <a href="{{route('admin.games.score',['id'=>$game->id])}}" class="btn btn-primary">O'yinlar ro'yhati</a>
                                     </ul>
                                 </div>
                               <div class="col-md-5">
                                     <ul class="list-group">
                                         <li class="list-group-item  text-center"><h3>{{$game->guestteam->name}}</h3>  </li><br>
                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guest">
                                              <i class="fa fa-soccer-ball-o">Goal</i>
                                         </button>
                                     </ul>
                                 </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="home" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$game->hometeam->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('admin.games.update',['game'=>$game->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Player:</label><i class="text-danger">*</i>
                                            <select class="form-control" name="player">
                                                @foreach($game->hometeam->players as $player)
                                                    <option value="{{$player->id}}">{{$player->fio}}({{$player->player_number}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Goal Type:</label><i class="text-danger">*</i>
                                            <select class="form-control" name="goaltype">
                                                <option value="penalty">Penalty</option>
                                                <option value="owngoal">Shaxsiy goal</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Time:</label><i class="text-danger">*</i>
                                            <input type="number" min="1" maxlength="2" class="form-control" name="time" required="required">
                                        </div>
                                        <input type="hidden" name="team" value="{{$game->hometeam->id}}">
                                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="guest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$game->guestteam->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('admin.games.update',['game'=>$game->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Player:</label><i class="text-danger">*</i>
                                            <select class="form-control" name="player">
                                                @foreach($game->guestteam->players as $player)
                                                    <option value="{{$player->id}}">{{$player->fio}}({{$player->player_number}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Goal Type:</label><i class="text-danger">*</i>
                                            <select class="form-control" name="goaltype">
                                                  <option value="penalty">Penalty</option>
                                                  <option value="owngoal">OwnGoal</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Time:</label><i class="text-danger">*</i>
                                            <input type="number" min="1" maxlength="2" class="form-control" name="time" required="required">
                                        </div>
                                        <input type="hidden" name="team" value="{{$game->guestteam->id}}">
                                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

   @endsection