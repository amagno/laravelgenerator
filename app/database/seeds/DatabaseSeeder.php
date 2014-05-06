<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TestesTableSeeder');
		$this->call('AtendimentoemailsTableSeeder');
		$this->call('AttemailsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('DepartamentosTableSeeder');
		$this->call('AcessosTableSeeder');
	}

}
