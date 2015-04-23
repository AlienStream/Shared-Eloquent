<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFavoritedTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_favorited_tracks', function (Blueprint $table) {
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->unsignedInteger('track_id');
			$table->foreign('artist_id')->references('id')->on('artists');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_favorited_tracks');
	}

}
