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

use App\Note;

Route::get('/trt/welcome', function () {
	return view('trt/welcome');
});

Route::get('/trt/index', function () {
	return view('trt/index');
});

Route::get('/trt/layout', function () {
	return view('trt/layout');
});

Route::get('/trtIndex', function () {
	return view('trt/trt');
});



Route::get('notes', function (){
	$notes = Note::all();
	//dd($notes);
	return view('notes', compact('notes'));
});

Route::post('notes', function () {
	return 'Creating note';
});

Route::get('notes/{note}/{attr?}', function ($note, $attr =null) {
	return Note::find($note);
})->where('note', '[0-9]+');

