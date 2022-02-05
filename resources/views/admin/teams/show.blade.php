
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')
    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">{{$team->name}} Players</h1>
                </div>
                <div class="card-body" >
                 <div class="row">

                     <div class="col-md-4">
                         <ul class="list-group">
                             <li class="list-group-item bg-primary text-center">Asosiy Tarkib</li>
                            @foreach(App\Player::all() as $player)
                                @if($player->team_id == $team->id and $player->main_id == 1)
                             <li class="list-group-item @if ($player->is_leader) bg-success @endif" ><b>{{$player->fio}}</b> ({{$player->player_number}}) {{$player->position->name}}<a href="{{route('admin.team.player.edit',['id'=>$player->id])}}" class="dropdown-item"><i class="fa fa-edit"></i></a></li>
                                 @endif
                            @endforeach
                         </ul>
                     </div>

                     <div class="col-md-4">
                         <ul class="list-group">
                             <li class="list-group-item bg-warning text-center">Zahira</li>
                             @foreach(App\Player::all() as $player)
                                 @if($player->team_id == $team->id and $player->main_id == 2)
                                     <li class="list-group-item" ><b>{{$player->fio}}</b> ({{$player->player_number}}) {{$player->position->name}} <a href="{{route('admin.team.player.edit',['id'=>$player->id])}}" class="dropdown-item "><i class="fa fa-edit"></i></a></li>
                                 @endif
                             @endforeach
                         </ul>
                     </div>
                     <div class="col-md-4">
                         <ul class="list-group">
                             <li class="list-group-item bg-danger text-center">Ro'yhatga Kiritilmagan</li>
                             @foreach(App\Player::all() as $player)
                                 @if($player->team_id == $team->id and $player->main_id == 3)
                                     <li class="list-group-item "><b>{{$player->fio}}</b> ({{$player->player_number}}) {{$player->position->name}}<a href="{{route('admin.team.player.edit',['id'=>$player->id])}}" class="dropdown-item "><i class="fa fa-edit"></i></a></li>
                                 @endif
                             @endforeach
                         </ul>
                     </div>
                 </div>

                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->
@endsection