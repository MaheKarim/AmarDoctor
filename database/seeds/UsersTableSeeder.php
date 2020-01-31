<?php

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
        //
        DB::table('users')->insert([

            'role_id' => '1',
            'name' => 'MR Admin',
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => bcrypt('rootadmin'),

        ]);
        DB::table('users')->insert([

            'role_id' => '2',
            'name' => 'MR Doctor',
            'username' => 'doctor',
            'email' => 'doctor@blog.com',
            'password' => bcrypt('rootdoctor'),

        ]);
        DB::table('users')->insert([

            'role_id' => '3',
            'name' => 'MR Nurse',
            'username' => 'nurse',
            'email' => 'nurse@blog.com',
            'password' => bcrypt('rootnurse'),

        ]);
        DB::table('users')->insert([

            'role_id' => '4',
            'name' => 'MR User',
            'username' => 'user',
            'email' => 'user@blog.com',
            'password' => bcrypt('rootuser'),

        ]);
    }
}
