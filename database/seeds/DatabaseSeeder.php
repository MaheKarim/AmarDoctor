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
       $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(DoctorTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(SiteSettingsTableSeeder::class);
        $this->call(NursingServiceTableSeeder::class);
    }
}
