<?php

use Illuminate\Database\Seeder;

class TahunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahuns')->insert([
            'tahun' => '2019',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tahuns')->insert([
            'tahun' => '2020',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tahuns')->insert([
            'tahun' => '2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
