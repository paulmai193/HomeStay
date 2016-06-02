<?php
use Illuminate\Database\Seeder;
class RoleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$isExist = DB::table ( 'roles' )->exists();
		if ($isExist === false) {
			$defaultRoles = array (
					array (
							'name' => 'administrator'
					),
					array (
							'name' => 'user'
					)
			);
			DB::table ( 'roles' )->insert ( $defaultRoles );
		} else {
			echo 'Roles were defined';
		}
	}
}
