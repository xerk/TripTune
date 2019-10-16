<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravelCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('travel_categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->text('description')->nullable();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('travel_categories');
	}
}