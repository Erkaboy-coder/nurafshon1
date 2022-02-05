@extends('admin.master')

@section('title',"Jadval")

@section('content')

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                          <div class="col-10">
                              <i class="fas fa-table"></i>
                              O'yinlar jadvali         
                          </div>
                          <!--  <div class="col-2">
                                 <a href="" class="btn btn-success">
                                     Jadval sozlamalari
                                 </a>
                           </div> -->
                    </div>
                </div>

            <form action="{{route('admin.matches.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body" >
                    <div class="table-responsive" >
                   
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Jamoa</th>
                                <th>O'yin</th>
                                <th>G'alaba</th>
                                <th>Mag'lubiyat</th>
                                <th>Durrang</th>
                                <th>T-F</th>
                                <th>Ochko</th>
                            </tr>
                            </thead>
                            <tfoot>
                             <tr>
                                <th>#</th>
                                <th>Jamoa</th>
                                <th>O'yin</th>
                                <th>G'alaba</th>
                                <th>Mag'lubiyat</th>
                                <th>Durrang</th>
                                <th>T-F</th>
                                <th>Ochko</th>
                            </tr>
                            </tr>
                            </tfoot>
                            <tbody>
                            
                        
                            <?php $i = 1;?>
                            @foreach (App\Match::all() as $match)
                                <tr>
                                    <td style="width:10px">{{$i++}}</td>
                                    <td style="width:150px">
                                            <select class="form-control" name="team_id{{$match->id}}" >
                                    @foreach(App\Team::all() as $team)
                                        <option value="{{$team->id}}" 
                                            @if($match->team_id == $team->id)
                                                selected
                                            @endif>
                                            {{$team->name}}
                                        </option>
                                    @endforeach
                                            </select>
                                    </td>
                                    <td style="width:100px"><input type="text" class="form-control" style="width:100%" value="{{$match->game}}" name="game{{$match->id}}"></td>
                                    <td style="width:100px"><input type="text" class="form-control" style="width:100%" value="{{$match->win}}" name="win{{$match->id}}"></td>
                                    <td style="width:100px"><input type="text" class="form-control" style="width:100%" value="{{$match->lost}}" name="lost{{$match->id}}"></td>
                                    <td style="width:100px"><input type="text" class="form-control" style="width:100%" value="{{$match->equal}}" name="equal{{$match->id}}"></td>
                                    <td style="width:100px"><input type="text" class="form-control" style="width:100%" value="{{$match->goaldifference}}" name="goaldifference{{$match->id}}"></td>
                                    <td style="width:100px"><input type="text" class="form-control" style="width:100%" value="{{$match->score}}" name="score{{$match->id}}"></td>
                                </tr>
                                <!-- <input type="text" name="match_id" style="display:none" value="{{$match->id}}"> -->
                            @endforeach
                            </tbody>

                     
                        </table>
                                
                    </div>

                     <div class="text-right pr-3 pb-3">
                        <button type="submit" class="btn btn-success" style="width:250px">
                           <i class="fa fa-check"></i> Yangilash
                        </button>
                    </div>

                </div>
                
                
                    </form>

                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

    @endsection