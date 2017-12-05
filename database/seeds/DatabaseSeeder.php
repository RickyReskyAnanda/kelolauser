<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <= 3; $i++) { 
	        DB::table('users')->insert([
	            'name' => 'skpd0'.$i,
	            'username' => 'skpd0'.$i,
                'password' => bcrypt('skpd0'.$i),
                'level' => 'skpd',
                'user_create' => '1',
	            'user_update' => '1',
	            'created_at' => date('Y-m-d h:i:s'),
	        ]);
    	}
    }
}
