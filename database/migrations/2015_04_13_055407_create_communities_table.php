<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('communities', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('thumbnail');
			$table->text('description');
			$table->unsignedInteger('favorite_count');
			$table->unsignedInteger('play_count');
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
		Schema::drop('communities');
	}

}
