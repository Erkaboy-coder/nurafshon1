
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')

    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              Players List
                          </div>
                           <div class="col-2">
                                 <a href="{{route('admin.games.create')}}" class="btn btn-success">Yangi o'yin yaratish</a>
                           </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Game</th>
                                <th>Start Time</th>
                                <th>Stadium</th>
                                <th>League</th>
                                <th>Group</th>
                                <th>Type</th>
                                <th>Result</th>
                                <th width="120px">Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Game</th>
                                <th>Start Time</th>
                                <th>Stadium</th>
                                <th>League</th>
                                <th>Group</th>
                                <th>Type</th>
                                <th>Result</th>
                                <th width="120px">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach (App\Game::all() as $game)
                                <?php
                                 $hometeamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get());
                                 $guestteamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->guestteam->id)->get());
                                ?>
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$game->hometeam->name}} vs {{$game->guestteam->name}}</td>
                                    <td>{{$game->start_time}}</td>
                                    <td>{{$game->hometeam->stadium->stadion_title}}</td>
                                    <td>{{$game->league->name}}</td>
                                    <td>{{$game->group->name}}</td>
                                    <td>{{$game->type->name}}</td>
                                    <td>{{$hometeamgoals}} - {{$guestteamgoals}}</td>
                                    <td>
                                        <div class="dropdown mt-1">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.games.edit',['id'=>$game->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.games.show',['id'=>$game->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.games.destroy',['id'=>$game->id])}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="dropdown-item " value = "Delete">
                                                </form>
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
  @endsection