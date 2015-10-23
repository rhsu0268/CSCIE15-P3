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
use Illuminate\Http\Request;

class LoremToolController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to
    */
    public function getPage() {

        return view('developers.loremTool');
    }

    public function postPage(Request $request)
    {

        // validation
        $this->validate(
            $request,
            ['number' => 'required|numeric|max:88|min:1'
            ]
        );

		$numberOfParagraphs = $request->input('number');
		$generator = new LoremGenerator();
		$paragraphs = $generator->getParagraphs($numberOfParagraphs);
		//$data = implode('<p>', $paragraphs);
		//dd($paragraphs);
		return view('developers.loremTool')->with(['paragraphs' =>  $paragraphs]);

		//return 'Generating Lorem Text ' . $request->input('number');
    }


}
