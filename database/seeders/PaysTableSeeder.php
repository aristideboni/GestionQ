<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            ['LibPays' => 'Côte d\'Ivoire'],
            ['LibPays' => 'Ghana'],
        ]);
    }
}
