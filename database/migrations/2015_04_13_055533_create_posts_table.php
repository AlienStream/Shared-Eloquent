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
			$table->integer('number_of_comments');
			$table->string('permalink');
			$table->string('content_url');
			$table->string('thumbnail');
			$table->integer('likes');
			$table->integer('dislikes');
			$table->string('submitter');
			$table->integer('source_id');
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
