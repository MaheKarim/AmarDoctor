<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           UsersTableSeeder::class,
           RoleTableSeeder::class,
           AreaTableSeeder::class,
           CategoryTableSeeder::class,
           DoctorTableSeeder::class,
           StatusTableSeeder::class,
           SiteSettingsTableSeeder::class,
           NursingServiceTableSeeder::class
       ]);
    }
}
