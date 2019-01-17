<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            //dados pessoas
            $table->char('cpf',8)->unique()->nullalbe();
            $table->string('name',45);
            $table->char('phone',12);
            $table->date('birth')->nullalbe();
            $table->char('gender',1)->nullalbe();
            $table->text('notes')->nullalbe();


            $table->string('email',80)->unique();
            $table->string('password',254)->nullalbe();
            //permisaao
            $table->string('status')->default('active');
            $table->string('permision')->default('app.user');

            $table->remenberToken();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	Schema::table('users', function(Blueprint $table){
		
	});
		Schema::drop('users');
	}
}
