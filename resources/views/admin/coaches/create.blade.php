@extends('admin.master')

@section('title',"Admin create coach")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Create Coach</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.coaches.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>F.I.O:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="fio" required="required">
                        </div>

                        <div class="form-group">
                            <label>Position:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="position" required="required">
                        </div>

                        <div class="form-group">
                            <label>Age:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="age" required="required">
                        </div>

                        <div class="form-group">
                            <label>Region:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="region" required="required">
                        </div>

                        <div class="form-group">
                            <label>Info lang:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Image:</label>
                            <input type="file" class="form-control-file" name="image" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create Coach</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

     @endsection