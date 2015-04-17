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
			$table->integer('rank');
			$table->string('thumbnail');
			$table->string('type');
			$table->integer('favorite_count');
			$table->integer('play_count');
			$table->string('embed_type');
			$table->string('embed_id');
			$table->integer('artist_id');
			$table->integer('channel_id');
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
