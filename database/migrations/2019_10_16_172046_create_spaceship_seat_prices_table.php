<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpaceshipSeatPricesTable extends Migration {

	public function up()
	{
		Schema::create('spaceship_seat_prices', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('spaceship_seat_id')->unsigned()->index();
			$table->integer('flight_id')->unsigned()->index();
			$table->double('price');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('spaceship_seat_prices');
	}
}