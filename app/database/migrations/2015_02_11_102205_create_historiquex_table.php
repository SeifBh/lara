<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriquexTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
				Schema::create('historiquex', function($table)
        {
            
            $table->integer('user_id');
            $table->integer('match_id')->unsigned();;

            $table->foreign('match_id')->references('match_id')->on('matchx');

            $table->string('p1');
            $table->string('p2');
            $table->string('score');
            $table->timestamps();

            $table->primary(array('user_id', 'match_id'));
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
				  // Schema::drop('historiquex');

	}

}
