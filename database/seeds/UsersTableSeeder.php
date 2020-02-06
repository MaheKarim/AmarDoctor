<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

            'role_id' => '1',
            'name' => 'MR Admin',
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => Hash::make('rootadmin'),

        ]);
        DB::table('users')->insert([

            'role_id' => '2',
            'name' => 'MR Doctor',
            'username' => 'doctor',
            'email' => 'doctor@blog.com',
            'password' => Hash::make('rootdoctor'),

        ]);
        DB::table('users')->insert([

            'role_id' => '3',
            'name' => 'MR Nurse',
            'username' => 'nurse',
            'email' => 'nurse@blog.com',
            'password' => Hash::make('rootnurse'),

        ]);
        DB::table('users')->insert([

            'role_id' => '4',
            'name' => 'MR User',
            'username' => 'user',
            'email' => 'user@blog.com',
            'password' => Hash::make('rootuser'),

        ]);
    }
}
