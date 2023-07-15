<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->delete();
        DB::table('kecamatans')->insert([
            // 1. Dayaluhur
            [
                'name' => 'DayeuhLuhur',
                'slug' => 'dayeuhluhur',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 2. Wanareja
            [
                'name' => 'Wanareja',
                'slug' => 'wanareja',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 3. Majenang
            [
                'name' => 'Majenang',
                'slug' => 'majenang',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 4. Cimanggu
            [
                'name' => 'Cimanggu',
                'slug' => 'cimanggu',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 5. Karangpucung
            [
                'name' => 'Karangpucung',
                'slug' => 'karangpucung',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 6. Cipari
            [
                'name' => 'Cipari',
                'slug' => 'cipari',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 7. Sidareja
            [
                'name' => 'Sidareja',
                'slug' => 'sidareja',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 8. Kedungreja
            [
                'name' => 'Kedungreja',
                'slug' => 'kedungreja',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 9. Patimuan
            [
                'name' => 'Patimuan',
                'slug' => 'patimuan',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 10. Gandrungmangu
            [
                'name' => 'Gandrungmangu',
                'slug' => 'gandrungmangu',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 11. Bantarsari
            [
                'name' => 'Bantarsari',
                'slug' => 'bantarsari',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 12. Kawunganten
            [
                'name' => 'Kawunganten',
                'slug' => 'kawunganten',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 13. Kampung laut
            [
                'name' => 'Kampung Laut',
                'slug' => 'kampung-laut',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 14. Jeruklegi
            [
                'name' => 'Jeruklegi',
                'slug' => 'jeruklegi',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 15. Kesugihan
            [
                'name' => 'Kesugihan',
                'slug' => 'kesugihan',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 16. Adipala
            [
                'name' => 'Adipala',
                'slug' => 'adipala',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 17. Maos
            [
                'name' => 'Maos',
                'slug' => 'maos',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 18. Sampang
            [
                'name' => 'Sampang',
                'slug' => 'samapang',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 19. Kroya
            [
                'name' => 'Kroya',
                'slug' => 'kroya',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 20. Binangun
            [
                'name' => 'Binangun',
                'slug' => 'binangun',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 21. Nusawungu
            [
                'name' => 'Nusawungu',
                'slug' => 'nusawungu',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 22. Cilacap Selatan
            [
                'name' => 'Cilacap Selatan',
                'slug' => 'cilacap-selatan',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 23. Cilacap Tengah
            [
                'name' => 'Cilacap Tengah',
                'slug' => 'cilacap-tengah',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            // 24. Cilacap Utara
            [
                'name' => 'Cilacap Utara',
                'slug' => 'cilacap-utara',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
        ]);
    }
}
