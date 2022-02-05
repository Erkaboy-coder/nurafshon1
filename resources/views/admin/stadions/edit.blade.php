@extends('admin.master')

@section('title',"Admin stadion edit")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Edit Stadion</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.stadions.update',['id'=>$stadion->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Title:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$stadion->stadion_title}}" class="form-control" name="stadion_title" required="required">
                        </div>


                        <div class="form-group">
                            <label>Slug:</label><i class="text-danger">*</i>
                            <textarea class="form-control" name="stadion_slug" required="required" id="" cols="30" rows="10">{{$stadion->stadion_slug}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Slug:</label><i class="text-danger">*</i>
                            <textarea class="form-control" name="stadion_body" required="required" id="" cols="30" rows="10">{{$stadion->stadion_body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Old info lang:</label><i class="text-danger">*</i>
                            <br>
                            <a href="#">{{$stadion->lang->lang_name}}</a>
                        </div>

                        <div class="form-group">
                            <label>New info lang:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image:</label><br>
                            <img style="width: 100px;height: 80px" class="mb-2" src="{{asset('storage/'.$stadion->image)}}">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update stadion</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

@endsection