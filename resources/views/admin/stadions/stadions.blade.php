@extends('admin.master')

@section('title',"Admin stadions page")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              Stadions List
                          </div>
                           <div class="col-2">
                                 <a href="{{route('admin.stadions.create')}}" class="btn btn-success">Yangi stadion qo'shish</a>
                           </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Rasmi</th>
                                <th>Sarlavhasi</th>
                                <th>Qisqacha ma'lumoat</th>
                                <th>Batafsil ma'lumot</th>
                                <th>Ma'lumot tili</th>
                                <th>Yaratilgan vaqti</th>
                                <th>Sozlamalar</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Rasmi</th>
                                <th>Sarlavhasi</th>
                                <th>Qisqacha ma'lumoat</th>
                                <th>Batafsil ma'lumot</th>
                                <th>Ma'lumot tili</th>
                                <th>Yaratilgan vaqti</th>
                                <th>Sozlamalar</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach (App\Stadion::all() as $stadion)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img style="width: 100px;height: 80px" src="{{asset('storage/'.$stadion->image)}}"></td>
                                    <td>{{$stadion->stadion_title}}</td>
                                    <td>{{$stadion->stadion_slug}}</td>
                                    <td>{{$stadion->stadion_body}}</td>
                                    <td>{{$stadion->lang->lang_name}}</td>
                                    <td>{{$stadion->created_at}}</td>
                                    <td>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href="{{route('admin.stadions.edit',['id'=>$stadion->id])}}" class="dropdown-item ">Edit</a>
                                                <a href="{{route('admin.stadions.show',['id'=>$stadion->id])}}" class="dropdown-item btn btn-success">Show</a>
                                                <form action="{{route('admin.stadions.destroy',['id'=>$stadion->id])}}" method="post">
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