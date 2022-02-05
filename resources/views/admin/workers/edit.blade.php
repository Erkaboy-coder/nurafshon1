@extends('admin.master')

@section('title',"Admin worker edit")

@section('content')
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Worker edit</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.workers.update',['id'=>$worker->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$worker->fio}}" class="form-control" name="fio" required="required">
                        </div>
                        <div class="form-group">
                            <label>Region:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$worker->position}}" class="form-control" name="position" required="required">
                        </div>
                        <div class="form-group">
                            <label>Player Number:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$worker->tel_number}}" class="form-control" name="tel_number" required="required">
                        </div>



                        <div class="form-group">
                            <label>Position:</label><i class="text-danger">*</i>
                            <select class="form-control" name="category_id" placeholder="sssss">
                                @foreach(App\LeadershipCategory::all() as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Old info language:</label><i class="text-danger">*</i>
                            <br>
                            <a href="#">{{$worker->lang->lang_name}}</a>
                        </div>

                        <div class="form-group">
                            <label>New info language:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image:</label><br>
                            <img style="width: 100px;height: 80px" class="mb-2" src="{{asset('storage/'.$worker->image)}}">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create worker</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>


        @endsection