
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')
    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Yangi o'yin yaratish</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.games.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>League:</label><i class="text-danger">*</i>
                            <select class="form-control" name="league" placeholder="sssss">
                                @foreach(App\League::all() as $league)
                                <option value="{{$league->id}}">{{$league->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>League:</label><i class="text-danger">*</i>
                            <select class="form-control" name="group" placeholder="sssss">
                                @foreach(App\Group::all() as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Type:</label><i class="text-danger">*</i>
                            <select multiple class="form-control" name="type" placeholder="sssss">
                                @foreach(App\Type::all() as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Team Home:</label><i class="text-danger">*</i>
                            <select class="form-control" name="teamhome" placeholder="sssss">
                                @foreach(App\Team::all() as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Team Guest:</label><i class="text-danger">*</i>
                            <select class="form-control" name="teamguest" placeholder="sssss">
                                @foreach(App\Team::all() as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Start Time:</label><span class="text-warning"></span>
                            <input type="datetime-local" class="form-control" name="starttime" required="required">
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label>Info lang:</label><i class="text-danger">*</i>--}}
                            {{--<select class="form-control" name="lang_id" placeholder="sssss">--}}
                                {{--@foreach(App\Lang::all() as $lang)--}}
                                    {{--<option value="{{$lang->id}}">{{$lang->lang_name}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        <button type="submit" class="btn btn-primary btn-block">O'yin yaratish</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->
@endsection
