@extends('master')

@section('title','Asosiy tarkib')
@section('header','Asosiy tarkib')


@section('content')




    <div class="site-section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-12 text-center mb-5">
                    <h2 class="text-black">Asosiy tarkib</h2>
                </div> -->
            </div>
            <div class="row">
                @foreach(App\Player::where('main_id',1)->get() as $player)
                <div class="col-md-4 text-center p-2">
                    <div class="card text-center shadow-lg">
                      <div class="card-header">
                       <b style="color:#282f89">{{$player->fio}}</b>
                      </div>
                      <div class="card-body">
                        <a href="#" class="data-player" data-toggle="modal" data-player="{{$player->id}}" data-target="#exampleModal{{$player->id}}" >
                            <img src="{{asset('storage/'.$player->image)}}" 
                            style="width:100%;height: auto;border-radius: 10px;">
                                </a>
                      </div>
                      <div class="card-footer text-muted">
                        <span class="position" style="color:#282f89">
                            <b>{{$player->position->name}}</b>
                        </span>
                      </div>
                    </div>

                </div>
               @endforeach
            </div>
            <!-- Button trigger modal -->
            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
                {{--Launch demo modal--}}
            {{--</button>--}}

            <!-- Modal -->
            @foreach(App\Player::where('main_id',1)->get() as $player)
            <div class="modal fade" id="exampleModal{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$player->fio}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                  <div class="col-md-7">
                                      <p><b>Raqami: </b>{{$player->player_number}} - raqam</p>
                                      <p><b>  Pozitsiyasi: </b> {{$player->position->name}}</p>
                                      <p><b>  Tug'ilgan joyi: </b> {{$player->region}}</p>
                                      <p><b>  Tug'ilgan kuni: </b> {{$player->birthday}}</p>
                                      <p><b>  Og'irligi: </b> {{$player->weight}}</p>
                                      <p><b>  Bo'yi: </b> {{$player->height}}</p>
                                  </div>
                                 <div class="col-md-5">
                                     <img src="{{asset('storage/'.$player->image)}}" 
                                     style="height: 90%;width: 100%;border-radius:5px" alt="Image" class="image">
                                 </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiqish</button>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach




        </div>
    </div>
    @endsection
{{--@section('scripts')--}}

    {{--<script>--}}
        {{--$(".data-player").click(function(){--}}
            {{--var  player_id = $(this).attr('data-player');--}}
            {{--// alert(player_id);--}}

            {{--$.ajax({--}}
                {{--headers: {--}}
                    {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                {{--},--}}
                {{--type: 'POST',--}}
                {{--url:'showplayer',--}}
                {{--data:{'player_id':player_id},--}}
                {{--success:function(player){--}}
                    {{--$('.modal-title').text(player['fio']);--}}
                    {{--$('.raqam').text(player['player_number']);--}}
                    {{--$('.positsiya').text(player['position']['name']);--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@stop--}}
