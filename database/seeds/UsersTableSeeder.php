<?php

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
            'name' => 'sample12',
            'email' => 'sample12@sample.com',
            'password' => bcrypt('sample12') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample13',
            'email' => 'sample13@sample.com',
            'password' => bcrypt('sample13') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample14',
            'email' => 'sample14@sample.com',
            'password' => bcrypt('sample14') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample15',
            'email' => 'sample15@sample.com',
            'password' => bcrypt('sample15') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample16',
            'email' => 'sample16@sample.com',
            'password' => bcrypt('sample16') 
        ]);
    }
}