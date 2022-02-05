

@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')
    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">O'zgartirish</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.teams.update',['team'=>$team->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$team->name}}" class="form-control" name="name" required="required">
                        </div>
                        <div class="form-group">
                            <label>Region:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$team->region}}" class="form-control" name="region" required="required">
                        </div>
                        <div class="form-group">
                            <label>Year:</label>
                            <input type="number"  name="year" class="form-control" value="{{$team->year}}" placeholder="YYYY" min="1900" max="2100">
                        </div>
                        <div class="form-group">
                            <label>Stadium:</label><i class="text-danger">*</i>
                            <select class="form-control" name="stadium" value="{{$team->stadium->name}}">
                                <option value="{{$team->stadium_id}}">{{$team->stadium->stadion_title}}</option>
                                @foreach(\App\Stadium::all() as $stadium)
                                    @if ($team->stadium_id == $stadium->id)
                                        @else
                                        <option value="{{$stadium->id}}">{{$stadium->stadion_title}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control mt-2" name="stadion"> -->
                        </div>

                        <div class="form-group">
                            <label>League:</label><i class="text-danger">*</i>
                            <select class="form-control" name="league">
                                <option value="{{$team->league_id}}">{{$team->league->name}}</option>
                                @foreach(\App\League::all() as $league)
                                    @if($team->league_id != $league->id)
                                    <option value="{{$league->id}}">{{$league->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>League:</label><i class="text-danger">*</i>
                            <select class="form-control" name="group">
                                <option value="{{$team->group_id}}">{{$team->group->name}}</option>
                                @foreach(\App\Group::all() as $group)
                                    @if($group->group_id != $group->id)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image:</label><br>
                            <img style="width: 100px;height: 80px" src="{{asset('storage/'.$team->image)}}">
                            <input type="file" class="form-control-file" name="image" >
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create Player</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
@endsection
