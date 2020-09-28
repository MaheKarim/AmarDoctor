<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class NurseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nurses')->insert([
            'id' => '1',
            'user_id' => '3',
            'edu_degree' => 'B.Sc in Nursing',
            'about_me' => \Illuminate\Support\Str::random(50),
            'present_address' => \Illuminate\Support\Str::random(15),
            'area_name_id' => '1',
            'service_status_id' => '1',
            'created_at' => Carbon::now(),
        ]);
    }
}
