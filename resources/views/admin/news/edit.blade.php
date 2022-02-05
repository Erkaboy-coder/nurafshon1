@extends('admin.master')

@section('title',"Admin edit news")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Edit news</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.news.update',['id'=>$news->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>News slug:</label><i class="text-danger">*</i>
                            <textarea name="news_slug"  class="form-control" id="" cols="30" rows="10">{{$news->news_slug}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>News title:</label><i class="text-danger">*</i>
                            <input type="text" value="{{$news->news_title}}" class="form-control" name="news_title" required="required">
                        </div>
                        <div class="form-group">
                            <label>News Body:</label><i class="text-danger">*</i>
                            <textarea name="news_body"  class="form-control" id="" cols="30" rows="10">{{$news->news_body}}</textarea>
                        </div>



                        <div class="form-group">
                            <label>News language:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image:</label><br>
                            <img style="width: 100px;height: 80px" class="mb-2" src="{{asset('storage/'.$news->news_image)}}">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Edit news</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

@endsection