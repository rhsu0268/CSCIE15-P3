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

Route::get('/testRandomUser', function() {
	
	// require the Faker autoloader
	//require_once '/path/to/Faker/src/autoload.php';
	// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create();

	// generate data by accessing properties
	echo $faker->name;

	//return $faker->name;

});

