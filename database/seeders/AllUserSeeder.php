<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AllUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allUser')->insert([
            'name' => 'Ashraful Islam',
            'email' => 'ashraful@gmail.com',
            'password' => Hash::make('12345'),
        ]);
        DB::table('allUser')->insert([
            'name' => 'Limon Hasan',
            'email' => 'limon@gmail.com',
            'password' => Hash::make('12345'),
        ]);
        DB::table('allUser')->insert([
            'name' => 'Salman Khan',
            'email' => 'salman@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
