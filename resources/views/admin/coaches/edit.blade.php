@extends('admin.master')

@section('title',"Admin foto edit")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Edit Foto</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.coaches.update',['id'=>$coach->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>F.I.O:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$coach->fio}}" class="form-control" name="fio" required="required">
                        </div>

                        <div class="form-group">
                            <label>Position:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$coach->position}}" class="form-control" name="position" required="required">
                        </div>

                        <div class="form-group">
                            <label>Age:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$coach->age}}" class="form-control" name="age" required="required">
                        </div>
                        <div class="form-group">
                            <label>Region:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$coach->region}}" class="form-control" name="region" required="required">
                        </div>

                        <div class="form-group">
                            <label>Old Info language:</label><i class="text-danger">*</i>
                            <br>
                            <a href="#">{{$coach->lang->lang_name}}</a>
                        </div>

                        <div class="form-group">
                            <label>New Info language:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image:</label><br>
                            <img style="width: 100px;height: 80px" class="mb-2" src="{{asset('storage/'.$coach->image)}}">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update coach</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

@endsection