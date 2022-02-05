@extends('admin.master')

@section('title',"Admin workers page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              Xodimlar ro'yxati
                          </div>
                           <div class="col-2">
                                 <a href="{{route('admin.workers.create')}}" class="btn btn-success">Xodim qo'shish</a>
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
                                <th>Name</th>
                                <th>Position</th>
                                <th>Tel Number</th>
                                <th>Category</th>
                                <th>Info Lang</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Tel Number</th>
                                <th>Category</th>
                                <th>Info Lang</th>
                                <th width="120px">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (App\Worker::all() as $worker)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img style="width: 100px;height: 80px" src="{{asset('storage/'.$worker->image)}}"></td>
                                    <td>{{$worker->fio}}</td>
                                    <td>{{$worker->position}}</td>
                                    <td>{{$worker->tel_number}}</td>
                                    <td>{{$worker->category->category_name}}</td>
                                    <td>{{$worker->lang->lang_name}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.workers.edit',['id'=>$worker->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.workers.show',['id'=>$worker->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.workers.destroy',['id'=>$worker->id])}}" method="post">
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