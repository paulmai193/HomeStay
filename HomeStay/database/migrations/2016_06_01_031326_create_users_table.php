<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'users', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'name' );
			$table->string ( 'email' )->unique ();
			$table->string ( 'password' );
			$table->rememberToken ();
			$table->timestamps ();
			$table->integer ( 'role_id' )->unsigned ();
		} );
		Schema::table ( 'users', function ($table) {
			$table->foreign ( 'role_id' )->references ( 'id' )->on ( 'roles' )->onDelete('cascade')->onUpdate('cascade');
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop ( 'users' );
	}
}
