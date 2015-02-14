<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
				Schema::create('teamx', function($table)
        {
            //Primary Key
            $table->increments('team_id');	
            $table->string('name');
            $table->string('fullName');
            $table->string('ligue');
            $table->string('stade');
            $table->string('nomPresident');
            $table->string('Entraineur');
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
		//
				Schema::drop('teamx');

	}

}
