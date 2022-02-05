@extends('admin.master')

@section('title',"Admin foto edit")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Edit wins</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.wins.update',['id'=>$wins->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Title:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$wins->wins_title}}" class="form-control" name="wins_title" required="required">
                        </div>

                        <div class="form-group">
                            <label>Body:</label><i class="text-danger">*</i>
                            <textarea class="form-control" name="wins_body" required="required" id="" cols="30" rows="10">{{$wins->wins_body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Old wins lang News language:</label><i class="text-danger">*</i>
                            <br>
                            <a href="#">{{$wins->lang->lang_name}}</a>
                        </div>
                        <div class="form-group">
                            <label>New  Win language:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label>Image:</label><br>
                            <img style="width: 100px;height: 80px" class="mb-2" src="{{asset('storage/'.$wins->wins_image)}}">
                            <input type="file" class="form-control-file" name="wins_image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create Player</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

@endsection