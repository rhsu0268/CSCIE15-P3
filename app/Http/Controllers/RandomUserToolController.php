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
       
        //return "random user tool";
        return view('developers.randomUserTool');
    }

    
    public function postPage(Request $request) 
    {

        // validation 

        $this->validate(
            $request, 
            ['users' => 'required|numeric|max:88|min:1'
            ]
        );

        // use the factory to create a Faker\Generator instance

        $numberOfUsers = $request->input('users');
        $showAddress = $request->input('address');
        $showPhoneNumber = $request->input('phoneNumber');
        //echo $showAddress;
        $users = array();
        for ($i = 0; $i < $numberOfUsers; $i++) 
        {
            //$user = array();
            $faker = Faker::create();

            //$user["name"] = $faker->name;
            if (!isset($showAddress) && (!isset($showPhoneNumber)))
            {
                $user = array("name" => $faker->name);
            }
            elseif (isset($showAddress)  && (isset($showPhoneNumber)))
            {
                $user = array("name" => $faker->name, "address" => $faker->address, "phoneNumber" => $faker->phonenumber);
            }
            elseif (isset($showAddress)) 
            {
                $user = array("name" => $faker->name, "address" => $faker->address);
            }
            elseif (isset($showPhoneNumber)) 
            {
                $user = array("name" => $faker->name, "phoneNumber" => $faker->phonenumber);
            }
            //array_push($user, "name" => $faker->name);
           
            array_push($users, $user);
            //print_r($users);

            
        }
        return view('developers.randomUserTool')->with(['users' =>  $users]);

    
    }
    
    

    
}