@extends('admin.master')

@section('title',"Admin video edit")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Edit Video</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.video.update',['id'=>$video->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label> Video Title:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$video->video_title}}" class="form-control" name="video_title" required="required">
                        </div>
                        <div class="form-group">
                            <iframe width="200" height="150" src="{{$video->video_link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>


                        <div class="form-group">
                            <label> New Video  file:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$video->video_link}}" class="form-control" name="video_link" required="required">
                        </div>

                        <div class="form-group">
                            <label>Old info language:</label><i class="text-danger">*</i>
                            <br>
                            <a href="#">{{$video->lang->lang_name}}</a>
                        </div>

                        <div class="form-group">
                            <label>New info language:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Edit video file</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

     @endsection