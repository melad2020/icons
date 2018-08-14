<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'services' )->insert ( [ 
				'name' => 'Website',
				'code' => 'WS' 
		] );
		DB::table ( 'services' )->insert ( [ 
				'name' => 'Logo',
				'code' => 'LG' 
		] );
		DB::table ( 'services' )->insert ( [ 
				'name' => 'Mobile App',
				'code' => 'MA' 
		] );
	}
}
