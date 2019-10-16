<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlightCasesTable extends Migration {

	public function up()
	{
		Schema::create('flight_cases', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('flight_id')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('flight_cases');
	}
}