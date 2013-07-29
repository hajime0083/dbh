<?php

use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	public function up()
	{
		Schema::create('users', function($table) {

			$table->increments('id');
			$table->string('email')->comment('メールアドレス');
			$table->string('password')->comment('パスワード');
			$table->string('name')->comment('氏名');
			$table->unsignedInteger('role')->comment('権限値');
			$table->timestamps();
			$table->softDeletes();

			$table->unique('email');
			$table->index('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}