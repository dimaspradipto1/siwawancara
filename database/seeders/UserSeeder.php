<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'is_interviewer' => false,
                'is_timtes' => false,
            ],
            [
                'name' => 'Interviewer',
                'email' => 'interviewer@gmail.com',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_interviewer' => true,
                'is_timtes' => false,
            ],
            [
                'name' => 'Timtes',
                'email' => 'timtes@gmail.com',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_interviewer' => false,
                'is_timtes' => true,
            ],
        ]);
    }
}
