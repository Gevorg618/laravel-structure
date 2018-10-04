<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    DB::table('admins')->insert([
	        'name' => "Super Admin",
	        'email' => 'superadmin@gmail.com',	        
	        'job_title' => 'Web sote owner',
	        'password' => bcrypt('123456')
	    ]);

	}
}
