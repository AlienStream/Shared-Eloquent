<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracks', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->float('rank');
			$table->string('thumbnail');
			$table->unsignedInteger('favorite_count');
			$table->unsignedInteger('play_count');
			$table->unsignedInteger('channel_id');
			$table->foreign('channel_id')->references('id')->on('channels');
			$table->unsignedInteger('content_flags');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tracks');
	}

}
