<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
// use Database\Seeders\Hash;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Admin1',
        	'username' => 'deandra',
        	'password' => Hash::make('45220007'),
        	'email' => 'deandra@mbuh.co',
        	'nim' => '45220007',
        	'role' => 1,
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin2',
        	'username' => 'erlangga',
        	'password' => Hash::make('45220008'),
        	'email' => 'erlangga@entah.om',
        	'nim' => '45220008',
        	'role' => 2
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin3',
        	'username' => 'erlyan',
        	'password' => Hash::make('45220009'),
        	'email' => 'erlyan@entah.om',
        	'nim' => '45220009',
        	'role' => 3
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin4',
        	'username' => 'ratna',
        	'password' => Hash::make('45220024'),
        	'email' => 'ratna@idk.zzz',
        	'nim' => '45220024',
        	'role' => 4
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin5',
        	'username' => 'vhiela',
        	'password' => Hash::make('45220029'),
        	'email' => 'vhiela@vhiela.vhiela',
        	'nim' => '45220029',
        	'role' => 5
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin6?',
        	'username' => 'visitor',
        	'password' => Hash::make('12345678'),
        	'email' => 'visitor@visitor.visitor',
        	'nim' => '12345678',
        	'role' => 6
        ]);
    }
}
