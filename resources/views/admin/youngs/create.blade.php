
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')

    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Create Player</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.youngs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="name" required="required">
                        </div>
                        <div class="form-group">
                            <label>Birthday:</label><span class="text-warning">(dd.mm.yy)</span>
                            <input type="date" class="form-control" name="birthday" required="required">
                        </div>
                        <div class="form-group">
                            <label>Region:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="region" required="required">
                        </div>
                        <div class="form-group">
                            <label>Og'irligi:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="weight" >
                        </div>
                        <div class="form-group">
                            <label>Og'irligi:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="height">
                        </div>
                        <div class="form-group">
                            <label>Player Number:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="player_number" required="required">
                        </div>
                        <div class="form-group">
                            <label>Team:</label><i class="text-danger">*</i>
                            <select class="form-control" name="team">
                                @foreach(App\Team::all() as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Main:</label><i class="text-danger">*</i>
                            <select class="form-control"  name="main">
                                @foreach(App\Main::all() as $main)
                                        <option value="{{$main->id}}">{{$main->name}}</option>
                                @endforeach
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
                            <label>Image:</label>
                            <input type="file" class="form-control-file" name="image" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create Player</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

  @endsection