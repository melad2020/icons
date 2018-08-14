<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SourcesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'sources' )->insert ( [ 
				'name' => 'Wasla',
				'code' => 'WS' 
		] );
		DB::table ( 'sources' )->insert ( [ 
				'name' => 'Echo',
				'code' => 'EC' 
		] );
		DB::table ( 'sources' )->insert ( [ 
				'name' => 'Tawasol',
				'code' => 'TW' 
		] );
	}
}
