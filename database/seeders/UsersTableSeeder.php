<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
        	'name' => 'Admin1',
        	'username' => 'deandra',
        	'email' => 'deandra@mbuh.co',
        	'nim' => '45220007',
        	'role' => 1,
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin2',
        	'username' => 'erlangga',
        	'email' => 'erlangga@entah.om',
        	'nim' => '45220008',
        	'role' => 2
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin3',
        	'username' => 'erlyan',
        	'email' => 'erlyan@entah.om',
        	'nim' => '45220009',
        	'role' => 3
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin4',
        	'username' => 'ratna',
        	'email' => 'ratna@idk.zzz',
        	'nim' => '45220024',
        	'role' => 4
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin5',
        	'username' => 'vhiela',
        	'email' => 'vhiela@vhiela.vhiela',
        	'nim' => '45220029',
        	'role' => 5
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin6?',
        	'username' => 'visitor',
        	'email' => 'visitor@visitor.visitor',
        	'nim' => '12345678',
        	'role' => 6
        ]);
    }
}
