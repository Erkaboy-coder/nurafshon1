@extends('admin.master')

@section('title',"Admin create new stadion")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="one text-center  text-success">Yangi stadion qo'shish</h1>
                </div>
                <div class="card-body" >

                    <form action="{{route('admin.stadions.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Sarlavhasi:</label><i class="text-danger">*</i>
                            <input type="text" class="form-control" name="stadion_title" required="required">
                        </div>

                        <div class="form-group">
                            <label>Qisqacha ma'lumot:</label><i class="text-danger">*</i>
                            <textarea class="form-control" name="stadion_slug" required="required" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Batafsil ma'lumot:</label><i class="text-danger">*</i>
                            <textarea class="form-control" name="stadion_body" required="required" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Ma'lumot tili:</label><i class="text-danger">*</i>
                            <select class="form-control" name="lang_id" placeholder="sssss">
                                @foreach(App\Lang::all() as $lang)
                                    <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Stadion rasmi:</label>
                            <input type="file" class="form-control-file" name="image" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Yaratish</button>
                    </form>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

     @endsection