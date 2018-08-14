<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'clients' )->insert ( [ 
				'name' => 'Microsoft',
				'code' => 'MI'
		] );
		DB::table ( 'clients' )->insert ( [ 
				'name' => 'RazyTech',
				'code' => 'RT' 
		] );
		DB::table ( 'clients' )->insert ( [ 
				'name' => 'PavliSoft',
				'code' => 'PS' 
		] );
	}
}
