<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admingantenk@gmail.com',
            'no_hp' => '08123456789',
            'address' => 'BarterBage Tower, Jakarta Selatan',
            'password' => Hash::make('12345'),
            'isAdmin' => true
        ]);
    }
}
