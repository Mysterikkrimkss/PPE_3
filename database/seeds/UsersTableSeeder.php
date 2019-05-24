<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Karim BOUZIDI',
            'email' => 'Karim.BOUZIDI@gmail.com',
            'password' => 'karimcba30',
            'role' => '1',
        ]);
    }
}
