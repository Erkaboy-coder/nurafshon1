@extends('admin.master')

@section('title',"Admin videos page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              Video List
                          </div>
                           <div class="col-2">
                                 <a href="{{route('admin.video.create')}}" class="btn btn-success">Create video</a>
                           </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Video title</th>
                                <th>Info lang</th>
                                <th>Video file</th>
                                <th>Created time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Video title</th>
                                <th>Info lang</th>
                                <th>Video file</th>
                                <th>Created time</th>
                                <th width="120px">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (App\Video::all() as $video)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$video->video_title}}</td>
                                    <td>{{$video->lang->lang_name}}</td>
                                    <td>
                                        <iframe width="200" height="150" src="{{$video->video_link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </td>
                                    <td>{{$video->created_at}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.video.edit',['id'=>$video->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.video.show',['id'=>$video->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.video.destroy',['id'=>$video->id])}}" method="post">
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