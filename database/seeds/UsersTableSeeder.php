<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'first_name' => 'My',
            'last_name' => 'Admin',
            'nickname' => 'Administrator',
            'email' => 'admin@admin.io',
            'password' => bcrypt('123456'),
        ]);
    }
}
