<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('homes')->insert([
            'nama' => 'Clayrs',
            'harga' => '13500',
            'foto' => '3.jpg',
        ]);
        
        DB::table('homes')->insert([
            'nama' => 'Gizelle',
            'harga' => '12000',
            'foto' => '2.jpg',
        ]);

        DB::table('homes')->insert([
            'nama' => 'Reacca',
            'harga' => '49000',
            'foto' => '1.jpg',
        ]);
    }
}
