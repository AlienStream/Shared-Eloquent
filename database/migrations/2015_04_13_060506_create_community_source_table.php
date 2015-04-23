<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitySourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('community_source', function (Blueprint $table) {
			$table->unsignedInteger('community_id');
			$table->foreign('community_id')->references('id')->on('communities');
			$table->unsignedInteger('source_id');
			$table->foreign('source_id')->references('id')->on('sources');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('community_source');
	}

}
