@extends('admin.master')

@section('title',"Admin news page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              Players List
                          </div>
                           <div class="col-2">
                                 <a href="{{route('admin.news.create')}}" class="btn btn-success">Create News</a>
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
                                <th>News slug</th>
                                <th>News title</th>
                                <th>News body</th>
                                <th>News lang</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>News slug</th>
                                <th>News title</th>
                                <th>News body</th>
                                <th>News lang</th>
                                <th width="120px">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (App\News::all() as $news)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img style="width: 100px;height: 80px" src="{{asset('storage/'.$news->news_image)}}"></td>
                                    <td>{{$news->news_slug}}</td>
                                    <td>{{$news->news_title}}</td>
                                    <td>{{$news->news_body}}</td>
                                    <td>{{$news->lang->lang_name}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.news.edit',['id'=>$news->id])}}" class="dropdown-item ">Edit</a>

                                                <a href="{{route('admin.news.show',['id'=>$news->id])}}" class="dropdown-item btn btn-success">Show</a>



                                                <form action="{{route('admin.news.destroy',['id'=>$news->id])}}" method="post">
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