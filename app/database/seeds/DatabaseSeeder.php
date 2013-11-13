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
		$this->call('ResourcesTableSeeder');
		$this->call('CustomersTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('TasksTableSeeder');
	}

}