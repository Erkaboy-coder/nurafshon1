@extends('master')

@section('title','Wins')
@section('header','Yutuqlar')


@section('content')



    <div class="site-section">
        <div class="container">
            <div class="row mb-5">

              @foreach($wins as $win)
                    <div class="col-md-4 col-lg-4 p-3">
                        <div class="post-entry">
                            <!-- <div class="image">
                                <img src="{{asset('storage/'.$win->wins_image)}}" alt="Image" class="img-fluid">
                            </div> -->
                             <div class="image" style="width: 100%;text-align: center;">
                                    <img style="height:300px;width: 100%" src="{{asset('storage/'.$win->wins_image)}}" alt="Image" class="img-fluid">
                                </div>

                            <div class="text p-4">
                                <h2 class="h5 text-black"><a href="#"> {{$win->wins_title}}</a></h2>
                                <span class="text-uppercase date d-block mb-3"><small>{{$win->created_at}}</small></span>
                                <p class="mb-0">
                                    {{$win->wins_body}}
                                </p>
                                <br>
                                <!-- <div>
                                    <a href="{{route('show',['id'=>$win->id])}}" class="btn btn-primary">Batafsil</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                @endforeach








            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                      {{$wins->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection