@extends('master')

@section('title','Show')
@section('header','Batafsil ko\'rish')


@section('content')



    <div class="site-section bg-light" data-aos="fade-up">
        <div class="container">
           <div class="row">
               <div class="col-md-8">
                    <h3 class="text-center text-primary">{{$post->news_slug}}</h3>
                  <div class="text-center">
                       <img src="{{asset('storage/'.$post->news_image)}}" style="height: 470px;border-radius: 15px;border:1px solid #b9bbbe;padding: 5px" alt="">
                  </div>
                   <br>
                   <p>{{$post->news_body}}</p>
                   <i class="text-primary">Time: {{$post->created_at}}</i>
               </div>

               <div class="col-md-4">
                  <!--  <h2 class="text text-center text-warning">
                           2017-2021 Harakatlar strategiysi
                   </h2>
                   <img src="{{asset('Nurafshon/harakatlar-strategiyasi.jpg')}}" style="width: 100%;height: 250px;"  alt="">
                   <hr> -->
                   <div class="container2" id="calendar">
                       <div id="v-cal">
                           <div class="vcal-header">
                               <button class="vcal-btn" data-calendar-toggle="previous">
                                   <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                   </svg>
                               </button>

                               <div class="vcal-header__label" data-calendar-label="month">
                                   March 2017
                               </div>


                               <button class="vcal-btn" data-calendar-toggle="next">
                                   <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                   </svg>
                               </button>
                           </div>
                           <div class="vcal-week">
                               <span>Mon</span>
                               <span>Tue</span>
                               <span>Wed</span>
                               <span>Thu</span>
                               <span>Fri</span>
                               <span>Sat</span>
                               <span>Sun</span>
                           </div>
                           <div class="vcal-body" data-calendar-area="month"></div>
                       </div>

                       <p class="demo-picked">
                           Date picked:
                           <span data-calendar-label="picked" id="son"></span>
                       </p>
                   </div>
               </div>


           </div>
        </div>
    </div>


@endsection