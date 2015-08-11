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

get('/', function () {
    return view('index');
});

get('/novo', function(){
	return view('form');
});

post('/novo', function(){
	event(new App\Events\PublishToFanoutEvent(Request::input('title')));
	
	return;
});