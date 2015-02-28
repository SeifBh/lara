<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   Schema::create('team', function($table)
        {
            //Primary Key
            $table->increments('team_id');	
            $table->string('name');
            $table->string('fullName');
            $table->integer('league_id')->unsigned();
            $table->string('stade');
            $table->string('nomPresident');
            $table->string('Entraineur');
            $table->foreign('league_id')->references('id')->on('league');

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
			Schema::drop('team');
	}

}
