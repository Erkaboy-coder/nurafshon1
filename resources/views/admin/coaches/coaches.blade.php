@extends('admin.master')

@section('title',"Admin Coaches page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              Coaches List
                          </div>
                           <div class="col-2">
                                 <a href="{{route('admin.coaches.create')}}" class="btn btn-success">Create Coach</a>
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
                                <th>F.I.O</th>
                                <th>Position</th>
                                <th>Age</th>
                                <th>Region</th>
                                <th>Language</th>
                                <th>Created time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>F.I.O</th>
                                <th>Position</th>
                                <th>Age</th>
                                <th>Region</th>
                                <th>Language</th>
                                <th>Created time</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (App\Coach::all() as $coach)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img style="width: 100px;height: 80px" src="{{asset('storage/'.$coach->image)}}"></td>
                                    <td>{{$coach->fio}}</td>
                                    <td>{{$coach->position}}</td>
                                    <td>{{$coach->age}}</td>
                                    <td>{{$coach->region}}</td>
                                    <td>{{$coach->lang->lang_name}}</td>
                                    <td>{{$coach->created_at}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.coaches.edit',['id'=>$coach->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.coaches.show',['id'=>$coach->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.coaches.destroy',['id'=>$coach->id])}}" method="post">
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