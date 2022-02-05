@extends('master')

@section('title','Yangiliklar')
@section('header','Yangiliklar')


@section('content')



    <div class="site-section">
        <div class="container">
            <div class="row mb-5">

                @foreach($news as $post)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-entry">
                            <div class="image" style="width: 100%;text-align: center;">
                                    <img style="height:390px;width: 100%" src="{{asset('storage/'.$post->news_image)}}" alt="Image" class="img-fluid">
                                </div>
                            <div class="text p-4">
                                <h2 class="h5 text-black"><a href="#">{{$post->news_title}}</a></h2>
                                <span class="text-uppercase date d-block mb-3"><small>Time:: &bullet; {{$post->created_at}}</small></span>
                                <!-- <p class="mb-0">{{$post->news_slug}}</p>
                                <br> -->
                                <div>
                                    <a href="{{route('show',['id'=>$post->id])}}" class="btn btn-primary">Batafsil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                       {{$news->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection