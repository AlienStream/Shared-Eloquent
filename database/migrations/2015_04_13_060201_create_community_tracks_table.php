<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunityTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('community_track', function (Blueprint $table) {
			$table->unsignedInteger('community_id');
			$table->foreign('community_id')->references('id')->on('communities');
			$table->unsignedInteger('track_id');
			$table->foreign('track_id')->references('id')->on('tracks');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('community_track');
	}

}
