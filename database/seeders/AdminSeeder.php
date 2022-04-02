<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admin')->insert([
            'f_name' => 'Raju',
            'l_name' => 'Hossen',
            'email' => 'admin@gmail.com',
            'password' =>Hash::make('raju'),
            'image' =>'',
            'is_admin' => 1,
            'status' => 1,  
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}