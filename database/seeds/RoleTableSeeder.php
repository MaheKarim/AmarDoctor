<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'Doctor',
            'slug' => 'doctor',
        ]);
        DB::table('roles')->insert([
            'name' => 'Nurse',
            'slug' => 'nurse',
        ]);
        DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'user',
        ]);

    }

}
