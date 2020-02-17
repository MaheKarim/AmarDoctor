<?php

use App\SiteSettings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sedding Start Here
        DB::table('site_settings')->insert([
            'id' => '1',
            'site_phnNumber' => '01778966356',
            'site_mail' => 'mahe@karim.com',
            'site_address' => 'Agargaon Taltola Govt. Colony',
            'site_shortDescription' => Str::random(25),
            'site_fbLink' => 'Lorem Ipsum',
            'site_ytLink' => 'Lorem Ipsum',
            'site_twitterLink' => 'Lorem Ipsum',
        ]);
    }
}
