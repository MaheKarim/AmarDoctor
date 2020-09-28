<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NursingServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // From Database
        DB::table('nursing_services')->insert([
            'nursingservice_name' => 'NG Tube: 1600/- BDT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('nursing_services')->insert([
            'nursingservice_name' => 'Catheter: 1200/- BDT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('nursing_services')->insert([
            'nursingservice_name' => 'Canula: 350/-  BDT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('nursing_services')->insert([
            'nursingservice_name' => 'Infusion or injection (IV): 350 Injection (IM): 200/- BDT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('nursing_services')->insert([
            'nursingservice_name' => 'Insulin Push: 200/-  BDT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('nursing_services')->insert([
            'nursingservice_name' => 'Dressing: 500/-  BDT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('nursing_services')->insert([
            'nursingservice_name' => 'Suction: 1500/-  BDT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }
}
