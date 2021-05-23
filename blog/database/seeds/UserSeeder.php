<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i < 10; $i++) {
    		DB::table('users')->insert(
    			[
    				'first_name'=>Str::random(7),
    				'last_name'=>Str::random(7),
    				'email'=>Str::random(7).'gmail.com'
    			]
    		);
    	}
      
    }
}
