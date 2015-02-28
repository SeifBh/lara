<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player', function($table)
        {
            //Primary Key
            $table->increments('player_id');	
            $table->string('name');
            $table->string('league');
            $table->string('team');
			$table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('team_id')->on('team');
            $table->string('position');
            $table->timestamps();



        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player');
	}

}
