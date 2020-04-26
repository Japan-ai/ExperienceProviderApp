<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
