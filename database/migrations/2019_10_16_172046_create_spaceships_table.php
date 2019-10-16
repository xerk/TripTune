<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpaceshipsTable extends Migration {

	public function up()
	{
		Schema::create('spaceships', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('model');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('spaceships');
	}
}