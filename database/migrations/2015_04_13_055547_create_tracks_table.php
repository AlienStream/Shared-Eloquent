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
			$table->unsignedInteger('favorite_count');
			$table->unsignedInteger('play_count');
			$table->unsignedInteger('artist_id');
			$table->foreign('artist_id')->references('id')->on('artists');
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
