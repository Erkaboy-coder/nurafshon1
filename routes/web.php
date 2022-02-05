<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MatchContoller;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        Route::get('/','MainController@home')->name('home_page');
        Route::get('/news','MainController@news')->name('news');
        Route::get('/contact','MainController@contact')->name('contact');
        Route::get('/club_history','MainController@club_history')->name('club_history');
        Route::get('/about_academy','MainController@about_academy')->name('about_academy');
        Route::get('/academy_members','MainController@academy_members')->name('academy_members');
        Route::get('/fotos','MainController@fotos')->name('fotos');
        Route::get('/video','MainController@video')->name('video');
        Route::get('/management','MainController@management')->name('management');
        Route::get('/workers','MainController@workers')->name('workers');
        Route::get('/team','MainController@team')->name('team');

        Route::get('/u-21','MainController@u21')->name('u21');
        Route::get('/all_players','MainController@all_players')->name('all_players');
        Route::get('/u-18','MainController@u18')->name('u18');
        Route::get('/futzal','MainController@futzal')->name('futzal');
        Route::get('/women','MainController@women')->name('women');

        Route::get('/youngs','MainController@youngs')->name('youngs');
       
        Route::get('/coaches','MainController@coaches')->name('coaches');
        Route::get('/league/{id}','MainController@league')->name('league');
//Route::get('/uz_cubok','MainController@uz_cubok')->name('uz_cubok');
        Route::get('/stadions','MainController@stadion')->name('stadion');
        Route::get('/wins','MainController@wins')->name('club_wins');


        Route::get('/show/{id}',function ($id){
            $post = \DB::table('news')->find($id);
            return view('show',['post'=>$post]);
        })->name('show');


        Route::get('/show_stadion/{id}',function ($id){
            $stadion = \DB::table('stadions')->find($id);
            return view('show_stadion',['stadion'=>$stadion]);
        })->name('show_stadion');

// Admin
        Route::prefix('admin')->middleware('auth')->name('admin.')->namespace('Admin')->group(function(){

            Route::get('/','IndexController@index')->name('index');
            Route::get('/login','IndexController@login')->name('login');
            Route::get('/gamesscore/{id}','GameController@score')->name('games.score');


            Route::resource('/workers','WorkerController');
            Route::resource('/fotos','FotoController');
            Route::resource('/matches','MatchController');
            Route::resource('/news','NewsContoller');
            Route::resource('/video','VideoContoller');
            Route::resource('/posts','PostContoller');
            Route::resource('/wins','WinsController');
            Route::resource('/coaches','CoachController');
            Route::resource('/stadions','StadionController');

            Route::resource('/players','PlayerController');
            Route::resource('/youngs','YoungController');
            Route::resource('/women','WomanController');
            Route::resource('/teams','TeamController');
            Route::resource('/games','GameController');

            Route::get('/teamplayer/{id}','PlayerController@team')->name('team.player.edit');
            Route::put('/teamplayer/{id}','PlayerController@playerupdate')->name('team.players.update');

        });
//        Route::post('/showplayer','Admin\PlayerController@showplayer')->name('playershow');


        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');


    });
