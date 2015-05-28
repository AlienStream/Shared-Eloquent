<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourceTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('source_track', function (Blueprint $table) {
			$table->unsignedInteger('source_id');
			$table->foreign('source_id')->references('id')->on('sources');
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
		Schema::drop('source_track');
	}

}
