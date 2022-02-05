
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
                                 <a href="{{route('admin.players.create')}}" class="btn btn-success">Create Player</a>
                           </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
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
                            @foreach (App\Team::all() as $team)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img style="width: 100px;height: 80px" src="{{asset('storage/'.$team->image)}}"></td>
                                    <td>{{$team->fio}}</td>
                                    <td>{{$team->position->name}}</td>
                                    <td>{{$team->player_number}}</td>
                                    <td>{{$team->birthday}}</td>
                                    <td>
                                        @if($team->is_main) Asosiy Tarkib
                                        @else Zahira
                                        @endif
                                    </td>
                                    <td>{{$team->region}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.players.edit',['id'=>$team->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.players.show',['id'=>$team->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.players.destroy',['id'=>$team->id])}}" method="post">
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

@endsection