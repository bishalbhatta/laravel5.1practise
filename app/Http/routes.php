<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/blog');
});

//blog page
get('blog','BlogController@index');
get('blog/{slug}','BlogController@showPost');

//content page
get('contentTest','ContentTestController@index');
get('contentTest/{id}','ContentTestController@showContent');


//admin area
get('admin',function(){
    return redirect('/admin/post');
});



//login and log out
get('/auth/login','Auth/AuthController@getLogin');
post('/auth/login','Auth/AuthController@postLogin');