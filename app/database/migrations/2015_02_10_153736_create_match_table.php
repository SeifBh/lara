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
            $table->integer('match_id')->primary();
            $table->string('nomEquipe1');
            $table->string('nomEquipe2');
            $table->string('etat');
            $table->date('date');
            $table->string('lieu');
            $table->string('r1');
            $table->string('r2');

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
		        Schema::drop('match');

	}

}