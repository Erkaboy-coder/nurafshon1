@extends('admin.master')

@section('title',"Admin video create")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Create video</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.video.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Video Title:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="video_title" required="required">
                        </div>

                        <div class="form-group">
                            <label>Video Link:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="video_link" required="required">
                        </div>

                        <div class="form-group">
                            <label>Info lang:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Create Video</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

        @endsection