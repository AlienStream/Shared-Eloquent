<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sources', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->string('type');
			$table->integer('importance');
			$table->string('url');
			$table->string('thumbnail');
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
		Schema::drop('sources');
	}

}
