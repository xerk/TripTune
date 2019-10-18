<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlightsTable extends Migration {

	public function up()
	{
		Schema::create('flights', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('from_station_id')->unsigned()->index();
			$table->integer('to_station_id')->unsigned()->index();
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('flights');
	}
}