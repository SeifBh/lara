<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('match', function($table)
        {
            $table->increments('match_id');
            $table->string('nomEquipe1');
            $table->string('nomEquipe2');
            $table->string('etat');
            $table->date('date');
            $table->string('lieu');
            $table->string('r1');
            $table->string('r2');
            $table->integer('league_id');
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
		       Schema::drop('match');
	}

}
