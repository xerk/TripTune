<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpaceshipSeatsTable extends Migration {

	public function up()
	{
		Schema::create('spaceship_seats', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('travel_category_id')->unsigned()->index();
			$table->integer('spaceship_id')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('spaceship_seats');
	}
}