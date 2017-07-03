<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \App\User::create([
        	'name' => 'akshay ravi',
        	'email' => 'dummy@xyz.com',
        	'password' => Hash::make('password')
        	]);
    }
}
