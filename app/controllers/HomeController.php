<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
	    /*
        Schema::create('art', function($newtable){
            $newtable -> increments('id');
            $newtable -> string('Something');
            $newtable -> string('title', 500);
            $newtable -> text('Some text');
            $newtable -> date('Created');
            $newtable -> date('Exhibition_date');
            $newtable -> timestamps();
        });

        Schema::table('art', function($newcolumn){
            $newcolumn -> boolean('alumni');
            $newcolumn -> dropColumn('exhibition_date');
        });

        Schema::dropIfExists('art');*/

        $painting = new Paintings;
        $painting -> title = 'Do No Wrong';
        $painting -> artist = 'D. DoRight';
        $painting -> year = 2014;
        $painting -> save();

		$theLandmarks = array("", "", "", "", "");
		return View::make('hello', array('theLocation' => 'Everywhere', 'theWeather' => 'Everything', 'theLandmarks' => $theLandmarks));
	}

}
