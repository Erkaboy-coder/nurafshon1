@extends('admin.master')

@section('title',"Admin home page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Table Example</div>
                <div class="card-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Team</th>
                                <th>Position</th>
                                <th>Number</th>
                                <th>Birthday</th>
                                <th>Main or Stock</th>
                                <th>Region</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Team</th>
                                <th>Position</th>
                                <th>Number</th>
                                <th>Birthday</th>
                                <th>Main or Stock</th>
                                <th>Region</th>
                                <th width="120px">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (App\Player::where('team_id','8')->get() as $player)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img style="width: 100px;height: 80px" src="{{asset('storage/'.$player->image)}}"></td>
                                    <td>{{$player->fio}}</td>
                                    <td>{{$player->team->name}}</td>
                                    <td>{{$player->position->name}}</td>
                                    <td>{{$player->player_number}}</td>
                                    <td>{{$player->birthday}}</td>
                                    <td>
                                        {{$player->main->name}}
                                    </td>
                                    <td>{{$player->region}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.players.edit',['id'=>$player->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.players.show',['id'=>$player->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.players.destroy',['id'=>$player->id])}}" method="post">
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
        <!-- /.container-fluid -->
@endsection