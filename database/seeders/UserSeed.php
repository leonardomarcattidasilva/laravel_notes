<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'userA',
            'password' => Hash::make('123456'),
            'email' => 'userA@test.com',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'username' => 'userB',
            'password' => Hash::make('123456'),
            'email' => 'userB@test.com',
            'created_at' => date('Y-m-d H:i:s' ),
        ]);

        DB::table('users')->insert([
            'username' => 'userC',
            'password' => Hash::make('123456'),
            'email' => 'userC@test.com',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
