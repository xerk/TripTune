<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingsTable extends Migration {

	public function up()
	{
		Schema::create('bookings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->integer('spaceship_seat_price_id')->unsigned()->index();
			$table->date('start_date');
			$table->date('end_date');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('bookings');
	}
}