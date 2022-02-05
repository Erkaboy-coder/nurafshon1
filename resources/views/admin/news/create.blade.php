@extends('admin.master')

@section('title',"Admin Add news")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Add news</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>News slug:</label><i class="text-danger">*</i>
                            <textarea name="news_slug" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>News title:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="news_title" required="required">
                        </div>
                        <div class="form-group">
                            <label>News body:</label><i class="text-danger">*</i>
                            <textarea name="news_body" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label>News lang:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>News Image:</label>
                            <input type="file" class="form-control-file" name="image" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create News</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->
@endsection