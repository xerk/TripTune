<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStationsTable extends Migration {

	public function up()
	{
		Schema::create('stations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('stations');
	}
}