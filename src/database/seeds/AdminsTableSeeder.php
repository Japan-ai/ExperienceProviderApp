<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admins',
            'email' => 'admintest@email.com',
            'password' => bcrypt('admin1110'),
            'remember_token' => Str::random(10),
        ]);
    }
}
