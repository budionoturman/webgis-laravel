<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Wisata Alam
        // 1. Wisata Budaya
        // 2. Desa Wisata

        DB::table('categories')->insert([
            [
                'name' => 'Wisata Alam', 
                'slug' => 'wisata-alam',
            ],
            [
                'name' => 'Wisata Budaya',
                'slug' => 'wisata-budaya',
            ],
            [
                'name' => 'Desa Wisata',
                'slug' => 'desa-wisata',
            ]
        ]);
    }
}