<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'category_name' => 'ENT',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Medicine',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Gynecologist',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Pediatrician',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Cardiologist',
        ]);
        DB::table('categories')->insert([
            'category_name' => ' Ophthalmologist ',
        ]);
    }
}
