<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('flights', function(Blueprint $table) {
			$table->foreign('from_station_id')->references('id')->on('stations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('flights', function(Blueprint $table) {
			$table->foreign('to_station_id')->references('id')->on('stations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('bookings', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('bookings', function(Blueprint $table) {
			$table->foreign('spaceship_seat_price_id')->references('id')->on('spaceship_seat_prices')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('spaceship_seats', function(Blueprint $table) {
			$table->foreign('travel_category_id')->references('id')->on('travel_categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('spaceship_seats', function(Blueprint $table) {
			$table->foreign('spaceship_id')->references('id')->on('spaceships')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('spaceship_seat_prices', function(Blueprint $table) {
			$table->foreign('spaceship_seat_id')->references('id')->on('travel_categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('spaceship_seat_prices', function(Blueprint $table) {
			$table->foreign('flight_id')->references('id')->on('flights')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('flight_cases', function(Blueprint $table) {
			$table->foreign('flight_id')->references('id')->on('flights')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('flights', function(Blueprint $table) {
			$table->dropForeign('flights_from_station_id_foreign');
		});
		Schema::table('flights', function(Blueprint $table) {
			$table->dropForeign('flights_to_station_id_foreign');
		});
		Schema::table('bookings', function(Blueprint $table) {
			$table->dropForeign('bookings_user_id_foreign');
		});
		Schema::table('bookings', function(Blueprint $table) {
			$table->dropForeign('bookings_spaceship_seat_price_id_foreign');
		});
		Schema::table('spaceship_seats', function(Blueprint $table) {
			$table->dropForeign('spaceship_seats_travel_category_id_foreign');
		});
		Schema::table('spaceship_seats', function(Blueprint $table) {
			$table->dropForeign('spaceship_seats_spaceship_id_foreign');
		});
		Schema::table('spaceship_seat_prices', function(Blueprint $table) {
			$table->dropForeign('spaceship_seat_prices_spaceship_seat_id_foreign');
		});
		Schema::table('spaceship_seat_prices', function(Blueprint $table) {
			$table->dropForeign('spaceship_seat_prices_flight_id_foreign');
		});
		Schema::table('flight_cases', function(Blueprint $table) {
			$table->dropForeign('flight_cases_flight_id_foreign');
		});
	}
}