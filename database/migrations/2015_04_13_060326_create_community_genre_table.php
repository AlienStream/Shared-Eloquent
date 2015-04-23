<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunityGenreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('community_genre', function (Blueprint $table) {
			$table->unsignedInteger('community_id');
			$table->foreign('community_id')->references('id')->on('communities');
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
		Schema::drop('community_genre');
	}

}
