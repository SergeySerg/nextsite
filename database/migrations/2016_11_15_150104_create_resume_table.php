<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resume', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->timestamp('date_birthday');
			$table->text('home');
			$table->text('education');
			$table->text('specialty');
			$table->text('experience');
			$table->text('salary');
			$table->text('telephone');
			$table->text('home_telephone');
			$table->text('home_telephone');
			$table->text('possession');
			$table->text('files');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resume');
	}

}
