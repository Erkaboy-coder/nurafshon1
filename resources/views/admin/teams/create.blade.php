
@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')


    <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Yangi jamoa yaratish</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.teams.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nomi:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="name" required="required">
                        </div>
                        <div class="form-group">
                            <label>Joyi:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="region" required="required">
                        </div>
                        <div class="form-group">
                            <label>Yaratilgan yili:</label>
                            <input type="number" name="year" class="form-control" value="2018" placeholder="YYYY" min="1900" max="2100">
                        </div>



                        <div class="form-group">
                            <label>Stadium:</label><i class="text-danger">*</i>
                            <select class="form-control" name="stadium">
                                <option value="">Tanlang:</option>
                                @foreach(\App\Stadion::all() as $stadium)
                                    <option value="{{$stadium->id}}">{{$stadium->stadion_title}}</option>
                                 @endforeach
                            </select>
                            <!-- <input type="text" class="form-control mt-2" name="stadion" required="required"> -->
                        </div>
                        <div class="form-group">
                            <label>League:</label><i class="text-danger">*</i>
                            <select class="form-control" name="league">
                                @foreach(\App\League::all() as $league)
                                    <option value="{{$league->id}}">{{$league->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>League:</label><i class="text-danger">*</i>
                            <select class="form-control" name="group">
                                @foreach(\App\Group::all() as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image:</label>
                            <input type="file" class="form-control-file" name="image" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Jamoa yaratish</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
 @endsection