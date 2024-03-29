<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttemailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attemails', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email');
			$table->integer('userid');
			$table->date('datarecebimento');
			$table->date('dataresposta');
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
		Schema::drop('attemails');
	}

}
