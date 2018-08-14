<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'employees' )->insert ( [ 
				'name' => 'Mohamed Ahmed',
				'code' => 'MA' 
		]);
		DB::table ( 'employees' )->insert ( [ 
				'name' => 'Mohamed Hassan',
				'code' => 'MH' 
		]);
		DB::table ( 'employees' )->insert ( [ 
				'name' => 'Mohamed Sayed',
				'code' => 'MS' 
		]);
		DB::table ( 'employees' )->insert ( [
				'name' => 'Mohamed Khaled',
				'code' => 'MK' 
		]);
		DB::table ( 'employees' )->insert ( [  
				'name' => 'Hassan Mohamed',
				'code' => 'HM' 
		]);
		DB::table ( 'employees' )->insert ( [
				'name' => 'Hassan Ahmed',
				'code' => 'HA' 
		]);
		DB::table ( 'employees' )->insert ( [
				'name' => 'Hassan Salem',
				'code' => 'HS' 
		] );
	}
}
