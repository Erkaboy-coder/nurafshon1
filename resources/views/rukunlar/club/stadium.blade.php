@extends('master')

@section('title','Stadion')
@section('header','Stadionlar')


@section('content')



    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
               @foreach ($stadions as $stadion)
                    <div class="col-md-4 col-lg-4 p-2">
                        <div class="post-entry">
                            <div class="image" style="text-align:center;">
                                <img src="{{asset('storage/'.$stadion->image)}}" style="width: 70%;height: 200px;" alt="Image" class="img-fluid">
                            </div>
                            <div class="text p-4">
                                <h2 class="h5 text-black"><a href="#">{{$stadion->stadion_title}}</a></h2>
                                <span class="text-uppercase date d-block mb-3"><small>{{$stadion->created_at}}</small></span>
                                <p class="mb-0">{{$stadion->stadion_slug}}</p>
                                <div>
                                    <a href="{{route('show_stadion',['id'=>$stadion->id])}}" class="btn btn-primary">Batafsil</a>
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach








            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                       {{$stadions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection