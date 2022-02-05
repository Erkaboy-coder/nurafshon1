@extends('master')

@section('title','Akademiya hodimalri')
@section('header','Akademiya hodimlari')


@section('content')

    <div class="site-section">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-8">
                  <table class="table table-bordered">
                      <tr class="bg-warning " style="color: white">
                          <th class="text-center">Xodim rasmi:</th>
                          <th>Xodim haqida:</th>
                      </tr>

                      <tr>
                         @foreach($members as $member)
                              <td>
                                  <div class="text-center">
                                      <img src="{{asset('storage/'.$member->image)}}" style="height: 150px" alt="Image" class="img-fluid">
                                  </div>
                              </td>
                              <td>
                                  <label for=""> F.I.O:</label> <a href="#" style="color: #b0d4f1">{{$member->fio}}</a>
                                  <br>
                                  <label for="">Lavozimi:</label> <a href="#" style="color: #b0d4f1">{{$member->position}}</a>
                                  <br>
                                  <label for="">Tel:</label> <a href="#" style="color: #b0d4f1">{{$member->tel_number}}</a>
                              </td>
                             @endforeach
                      </tr>
                  </table>
              </div>

              <div class="col-md-4 col-sm-4">
                  <!-- <h2 class="text text-center text-warning">
                      2017-2021 Harakatlar strategiysi
                  </h2>
                  <img src="{{asset('Nurafshon/harakatlar-strategiyasi.jpg')}}" style="width: 100%;height: 250px;"  alt=""> -->
                  <!-- <hr> -->
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