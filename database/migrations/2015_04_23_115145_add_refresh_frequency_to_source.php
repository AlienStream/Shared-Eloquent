<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRefreshFrequencyToSource extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sources', function(Blueprint $table)
		{
			$table->integer('refresh_frequency');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sources', function(Blueprint $table)
		{
			$table->dropColumn('refresh_frequency');
		});
	}

}
