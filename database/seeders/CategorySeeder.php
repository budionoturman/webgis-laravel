<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'name' => 'Wisata Alam', 
                'slug' => 'wisata-alam',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Wisata Budaya',
                'slug' => 'wisata-budaya',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Desa Wisata',
                'slug' => 'desa-wisata',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ]
        ]);
    }
}
