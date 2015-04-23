<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistTrackPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artist_track', function (Blueprint $table) {
			$table->unsignedInteger('artist_id');
			$table->foreign('artist_id')->references('id')->on('artists');
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
		Schema::drop('artist_track');
	}

}
