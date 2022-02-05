
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')

    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Create Player</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.players.update',['id'=>$player->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$player->fio}}" class="form-control" name="name" required="required">
                        </div>
                        <div class="form-group">
                            <label>Region:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$player->region}}" class="form-control" name="region" required="required">
                        </div>
                        <div class="form-group">
                            <label>Player Number:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$player->player_number}}" class="form-control" name="player_number" required="required">
                        </div>
                        <div class="form-group">
                            <label>Birthday:</label><span class="text-warning">(dd.mm.yy)</span>
                            <input type="date" value="{{$player->birthday}}" class="form-control" name="birthday" required="required">
                        </div>

                        <div class="form-group">
                            <label>Main:</label><i class="text-danger">*</i>
                            <select class="form-control"  name="main" placeholder="sssss">
                                <option value="0">First Team</option>
                                <option value="1">Substution</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Position:</label><i class="text-danger">*</i>
                            <select class="form-control" name="position" placeholder="sssss">
                                @foreach(App\Position::all() as $position)
                                    <option value="{{$position->id}}">{{$position->name}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image:</label><br>
                            <img style="width: 100px;height: 80px" class="mb-2" src="{{asset('storage/'.$player->image)}}">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create Player</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->
@endsection