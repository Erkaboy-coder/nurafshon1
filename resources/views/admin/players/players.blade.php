
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <i class="fas fa-table"></i>
                    Jamoa o'yinchilari
                </div>
                <div class="col-2">
                    <a href="{{route('admin.players.create')}}" class="btn btn-success">O'yinchi qo'shish</a>
                </div>
            </div>
        </div>
        <div class="card-body" >
            <div class="table-responsive" >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Rasmi</th>
                        <th>F.I.Sh</th>
                        <th>Jamoasi</th>
                        <th>Positsiyasi</th>
                        <th>Nomeri</th>
                        <th>To'g'ilgan yili</th>
                        <th>Zahira yoki Asosiy tarkib</th>
                        <th>Viloyat</th>
                        <th>Sozlamalar</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                         <th>#</th>
                        <th>Rasmi</th>
                        <th>F.I.Sh</th>
                        <th>Jamoasi</th>
                        <th>Positsiyasi</th>
                        <th>Nomeri</th>
                        <th>To'g'ilgan yili</th>
                        <th>Zahira yoki Asosiy tarkib</th>
                        <th>Viloyat</th>
                        <th>Sozlamalar</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach (App\Player::all() as $player)
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
    <!-- /.container-fluid -->

@endsection
