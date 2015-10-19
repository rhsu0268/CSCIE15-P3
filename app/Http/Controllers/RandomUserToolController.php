<?php

// namespace: All controller need to set namespace
// need to use global controllers
// if we use the App namespace, go into app folder
// prevents us from name conflicts - knows that it is defined within the namespace
// set namespace for BookController
namespace App\Http\Controllers;

// use it for a particular class that we are extending 
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator as LoremGenerator;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class RandomUserToolController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to 
    */
    public function getPage() {
    	
        // use the factory to create a Faker\Generator instance
        $users = array();
        for ($i = 0; $i < 10; $i++) 
        {
            $user = array();
            $faker = Faker::create();

            array_push($user, $faker->name);
            array_push($user, $faker->address);
            array_push($user, $faker->phonenumber);
            array_push($users, $user);
            //echo $faker->name, "\n";
        }
        /*
        for ($i = 0; $i < 10; $i++) 
        {
            echo $users[$i][0];
            //echo $faker->name, "\n";
        }
        */
        
        
        /*
        // generate data by accessing properties
        echo $faker->name . "\n";
          // 'Lucy Cechtelar';
        echo $faker->address . "\n";
          // "426 Jordy Lodge
          // Cartwrightshire, SC 88120-6700"
        echo $faker->phonenumber . "\n";
        */
        return view('developers.randomUserTool')->with(['users' =>  $users]);
    }

    public function postPage(Request $request) 
    {
        /*
        $users = array();
        for ($i = 0; $i < 10; $i++) 
        {
            $user = array();
            $faker = Faker::create();

            array_push($user, $faker->name);
            array_push($user, $faker->address);
            array_push($user, $faker->phonenumber);
            //echo $faker->name, "\n";
        }
        */
        return view('developers.randomUserTool')->with(['paragraphs' =>  $paragraphs]);

        //return 'Generating Lorem Text ' . $request->input('number');
    }

    

    
}