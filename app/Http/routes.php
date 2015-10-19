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

Route::get('/', 'IndexController@getIndex'); 

/*{
    return view('welcome');
});
*/

Route::get('/loremToolPage', 'LoremToolController@getPage');
Route::post('/loremToolPage/output', 'LoremToolController@postPage');


Route::get('/randomUserPage', 'RandomUserToolController@getPage');

Route::get('/testLorem', function() {
	$generator = new LoremGenerator();
	$paragraphs = $generator->getParagraphs(5);
	$data = implode('<p>', $paragraphs);

	return $data;

});