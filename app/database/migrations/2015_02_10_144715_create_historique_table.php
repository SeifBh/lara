<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriqueTable extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

	  Schema::create('historique', function($table)
        {
            $table->integer('user_id')->unique();
            $table->string('p1');
            $table->string('p2');
            $table->string('score');
             $table->integer('match_id');



            $table->timestamps();
             $table->integer('match_id')->unsigned();

$table->foreign('match_id')->references('match_id')->on('match');





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
		        Schema::drop('historique');

	}

}
