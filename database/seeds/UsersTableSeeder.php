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
            'name' => 'sample7',
            'email' => 'sample7@sample.com',
            'password' => bcrypt('sample7') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample8',
            'email' => 'sample8@sample.com',
            'password' => bcrypt('sample8') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample9',
            'email' => 'sample9@sample.com',
            'password' => bcrypt('sample9') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample10',
            'email' => 'sample10@sample.com',
            'password' => bcrypt('sample10') 
        ]);
        DB::table('users')->insert([
            'name' => 'sample11',
            'email' => 'sample11@sample.com',
            'password' => bcrypt('sample11') 
        ]);
    }
}