<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'sahil manhotra',
            'email'=>'sahil0730@gmail.com',
            'password'=>Hash::make('sahil@123'),
            'status'=>1
        ]);        
    }
}
