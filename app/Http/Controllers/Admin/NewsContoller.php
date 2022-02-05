<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\NewsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.news');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $path =  $request->file('image')->store('images', 'public');
        $news->news_title=$request->news_title;
        $news->news_slug=$request->news_slug;
        $news->news_body=$request->news_body;

        $news->lang_id=$request->lang_id;
        $news->news_image =$path;
        $news->save();
        return redirect()->route('admin.news.index');
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
        $news = News::find($id);
        return view('admin.news.edit',['news'=>$news]);
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

        $news = News::find($id);
        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        $news->news_slug=$request->news_slug;
        $news->news_title=$request->news_title;
        $news->news_body=$request->news_body;

        $news->lang_id=$request->lang_id;
        if($path != ""){
            $news->news_image =$path;
        }
        else{
            $news->news_image=$request->news_image;
        }
        $news->save();
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
