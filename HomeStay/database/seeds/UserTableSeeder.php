<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$admin = DB::table ( 'users' )->where ( 'email', 'admin@homestay.xxx' )->get();
		if ($admin != null) {
			echo "Administator account exist";
		} else {
			DB::table ( 'users' )->insert ( [
					'name' => 'administrator',
					'email' => 'admin@homestay.xxx',
					'password' => '0cc175b9c0f1b6a831c399e269772661',
					'role_id' => 1
			] );
		}
	}
}
