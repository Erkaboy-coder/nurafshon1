@extends('admin.master')

@section('title',"Admin fotos page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              Fotolovahalar
                          </div>
                           <div class="col-2">
                                 <a href="{{route('admin.fotos.create')}}" class="btn btn-success">
                                     Yangi foto qo'shish
                                 </a>
                           </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Info language</th>
                                <th>Created time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Info language</th>
                                <th>Created time</th>
                                <th width="120px">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (App\Foto::all() as $foto)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img style="width: 100px;height: 80px" src="{{asset('storage/'.$foto->image)}}"></td>
                                    <td>{{$foto->image_title}}</td>
                                    <td>{{$foto->image_slug}}</td>
                                    <td>{{$foto->lang->lang_name}}</td>
                                    <td>{{$foto->created_at}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.fotos.edit',['id'=>$foto->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.fotos.show',['id'=>$foto->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.fotos.destroy',['id'=>$foto->id])}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="dropdown-item " value = "Delete">
                                                </form>
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

    @endsection