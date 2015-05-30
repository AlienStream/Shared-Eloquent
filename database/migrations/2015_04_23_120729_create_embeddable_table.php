<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbeddableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('embeddables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('track_id');
			$table->foreign('track_id')->references('id')->on('tracks');
			$table->string('url')->unique();
			$table->string('type');
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
		Schema::drop('embeddables');
	}

}
