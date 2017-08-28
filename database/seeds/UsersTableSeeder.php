<?php

use \Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Marco Armiliato',
            'email' => 'admin@maschedule.com',
            'password' => bcrypt('landrugo1!'),
        ]);
    }
}