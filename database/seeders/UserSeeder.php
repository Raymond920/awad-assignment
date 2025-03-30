<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i = 1; $i < 10; $i++){
            DB::table('user')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@outlook.com',
                'password' => bcrypt('password123'), // secure password
            ]);
        }

        DB::table('user')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('test123'), // secure password
        ]);
    }
}
