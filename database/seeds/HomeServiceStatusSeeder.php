<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HomeServiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder code & type here
        DB::table('home_service_statuses')->insert([
            'service_status' => 'No',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('home_service_statuses')->insert([
            'service_status' => 'Yes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
