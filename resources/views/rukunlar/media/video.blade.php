@extends('master')

@section('title','Video lavhalar')
@section('header','Video lavhalar')


@section('content')



    <div class="site-section">
        <div class="container">
            <div class="row mb-5">


                @foreach($videos as $video)

                    <div class="col-6">
                        <div class="post-entry" style="border-radius: 10px">
                            <div class="image">
                                <iframe width="100%" height="350" src="{{$video->video_link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="text p-4">
                                <h2 class="h5 text-black"><a href="#">{{$video->video_title}}</a></h2>
                                <i>Time: {{$video->created_at}}</i>
                            </div>
                        </div>
                    </div>

                    @endforeach



            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                        <ul>
                           {{$videos->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection