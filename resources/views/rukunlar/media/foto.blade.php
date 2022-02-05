@extends('master')

@section('title','Foto lavhalar')
@section('header','Foto lavhalar')


@section('content')



    <div class="site-section">
        <div class="container">
            <div class="row mb-5">

               @foreach($fotos as $foto)
                    <div class="col-md-4 p-3" style="">
                         <div class="card text-center shadow-lg">
                            <div class="card-header">
                                <b style="color:#282f89">{{$foto->image_title}}</b>
                            </div>
                            <div class="card-body">
                                 <a href="{{asset('storage/'.$foto->image)}}" target="_blank"> 
                                <img src="{{asset('storage/'.$foto->image)}}"
                                        style="width:100%;height: 300px;border-radius: 10px;">
                                    </a>
                            </div>
                            <div class="card-footer" style="color:black;">
                                <b class="position" style="color:#282f89">
                                    <a href="#" style="color: #b0d4f1">{{$foto->image_slug}}</a>
                                    <br>
                                </b>
                            </div>
                        </div>
                    </div>
                   @endforeach




            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                       {{$fotos->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection