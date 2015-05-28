<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->unsignedInteger('number_of_comments');
			$table->string('permalink');
			$table->string('thumbnail');
			$table->integer('likes');
			$table->integer('dislikes');
			$table->string('submitter');
			$table->string('embed_url');
			$table->unsignedInteger('source_id');
			$table->foreign('source_id')->references('id')->on('sources');
			$table->boolean('is_new');
			$table->dateTime('posted_at');
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
		Schema::drop('posts');
	}

}
