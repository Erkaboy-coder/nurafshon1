@extends('admin.master')

@section('title',"Admin comments page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                {{--<div class="card-header">--}}
                    {{--<div class="row">--}}
                          {{--<div class="col-10">--}}
                              {{--<i class="fas fa-table"></i>--}}
                              {{--Players List--}}
                          {{--</div>--}}
                           {{--<div class="col-2">--}}
                                 {{--<a href="{{route('admin.video.create')}}" class="btn btn-success">Create Player</a>--}}
                           {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="card-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User First name</th>
                                <th>User Last name</th>
                                <th>User email</th>
                                <th>Comemnt title</th>
                                <th>Comemnt title</th>
                                <th>User comment</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>User First name</th>
                                <th>User Last name</th>
                                <th>User email</th>
                                <th>Comemnt title</th>
                                <th>User comment</th>
                                <th>Comment time</th>
                                <th width="120px">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (\DB::table('comments')->get() as $comment)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->lastname}}</td>
                                    <td>{{$comment->email}}</td>
                                    <td>{{$comment->title}}</td>
                                    <td>{{$comment->description}}</td>

                                    <td>{{$comment->created_at}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                                <form action="{{route('admin.posts.destroy',['id'=>$comment->id])}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit"  class=" btn btn-danger" value = "Delete">
                                                </form>
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