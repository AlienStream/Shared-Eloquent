<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistGenreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artist_genre', function (Blueprint $table) {
			$table->unsignedInteger('artist_id');
			$table->foreign('artist_id')->references('id')->on('artists');
			$table->unsignedInteger('genre_id');
			$table->foreign('genre_id')->references('id')->on('genres');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artist_genre');
	}

}
