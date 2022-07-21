<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => Str::random(2),
            'last_name' => Str::random(2),
            'email' => Str::random(2).'@gmail.com',
            
            
            
        ]);
    }
}
