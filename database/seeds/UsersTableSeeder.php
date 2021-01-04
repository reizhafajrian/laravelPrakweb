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
        App\User::create([
            'name' => 'Mr. Junk',
            'email' => 'junk@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 1
     ]);
     
     App\User::create([
            'name' => 'Mr. Jenkin',
            'email' => 'jenkin@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 2
     ]);
     
     App\User::create([
            'name' => 'Miss. Puff',
            'email' => 'puff@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 3
     ]); 
    }
}
