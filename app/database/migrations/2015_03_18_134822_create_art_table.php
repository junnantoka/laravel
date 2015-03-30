<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('sculpture', function(Blueprint $newtable){
            $newtable -> increments('id');
            $newtable -> string('Thing');
            $newtable -> string('title',500);
            $newtable -> date('Created');
            $newtable -> timestamps();
        });

        Schema::table('sculpture', function($newcolumn){
            $newcolumn -> text('description');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sculpture');
	}

}
