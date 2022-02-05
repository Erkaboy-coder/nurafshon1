<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\League;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $fotos = \DB::table('fotos')->orderBy('created_at','DESC')->take('8')->get();
        $news = \DB::table('news')->orderBy('created_at','DESC')->take('3')->get();
        return view('index',['news'=>$news,'fotos'=>$fotos]);
    }

    public function news()
    {
        $news = \DB::table('news')->orderBy('created_at','DESC')->paginate('9');
        return view('rukunlar.news',['news'=>$news]);
    }
    public function contact()
    {
        return view('rukunlar.contact');
    }

    public function club_history()
    {
        return view('rukunlar.club.club_history');
    }

    public function about_academy()
    {
        return view('rukunlar.academy.about_academy');
    }

    public function academy_members()
    {
        $members  = \DB::table('workers')->where('category_id','3')->get();

        return view('rukunlar.academy.academy_members',['members'=>$members]);
    }

    public function workers()
    {
        $members  = \DB::table('workers')->where('category_id','1')->get();

        return view('rukunlar.team.workers',['members'=>$members]);
    }

    public function fotos()
    {
        $fotos = \DB::table('fotos')->orderBy('created_at','DESC')->paginate('9');
        return view('rukunlar.media.foto',['fotos'=>$fotos]);
    }

    public function video()
    {
        $videos = \DB::table('videos')->orderBy('created_at','DESC')->paginate('6');
        return view('rukunlar.media.video',['videos'=>$videos]);
    }

//    jamoa

    public function management()
    {
        $rahbariyat  = \DB::table('workers')->where('category_id','3')->get();

        return view('rukunlar.team.management',['rahbariyat'=>$rahbariyat]);
    }

    public function team()
    {
        return view('rukunlar.team.team');
    }


    public function u21()
    {
        return view('rukunlar.team.u-21');
    }

     public function u18()
    {
        return view('rukunlar.team.u-18');
    }

     public function futzal()
    {
        return view('rukunlar.team.futzal');
    }

     public function women()
    {
        return view('rukunlar.team.women');
    }

     public function all_players()
    {
        return view('rukunlar.team.all_players');
    }


    public function youngs()
    {
        return view('rukunlar.team.youngs');
    }


    public function coaches()
    {
        $coaches  = \DB::table('coaches')->get();

        return view('rukunlar.team.coaches',['coaches'=>$coaches]);
    }


    public function league($id)
    {
        $league = League::find($id);
        return view('rukunlar.compatation.superliga',['league'=>$league]);
    }
//    public function uz_cubok()
//    {
//        return view('rukunlar.compatation.uz_cubok');
//    }

    public function stadion()
    {
        $stadions = \DB::table('stadions')->orderBy('created_at','DESC')->paginate('4');
        return view('rukunlar.club.stadium',['stadions'=>$stadions]);
    }

    public function wins()
    {
        $wins = \DB::table('wins')->orderBy('created_at','DESC')->paginate('4');
        return view('rukunlar.club.wins',['wins'=>$wins]);
    }
















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
