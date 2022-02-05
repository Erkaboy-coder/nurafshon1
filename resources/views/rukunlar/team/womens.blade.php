@extends('master')

@section('title','Ayollar kamandasi tarkibi')
@section('header','Ayollar kamandasi tarkibi')


@section('content')




    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="text-black">Ayollar kamandasi tarkibi</h2>
                </div>
            </div>
            <div class="row">
                @foreach(App\Player::where('main_id',9)->get() as $player)
                <div class="col-2 text-center">
                    <div class="player mb-5">
                        <a href="#" class="data-player" data-toggle="modal" data-player="{{$player->id}}" data-target="#exampleModal{{$player->id}}" >
                            <span class="team-number">{{$player->player_number}}</span>
                            <img src="{{asset('storage/'.$player->image)}}" alt="Image" class=" image rounded-circle"></a>
                        <h2>{{$player->fio}}</h2>
                        <span class="position">{{$player->position->name}}</span>
                    </div>
                </div>
               @endforeach
            </div>
            <!-- Button trigger modal -->
            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
                {{--Launch demo modal--}}
            {{--</button>--}}

            <!-- Modal -->
            @foreach(App\Player::where('main_id',9)->get() as $player)
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
                                     <img src="{{asset('storage/'.$player->image)}}" style="height: 70%;width: 100%" alt="Image" class="image rounded-circle"></a>
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
