<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengunjungs')->delete();
        DB::table('pengunjungs')->insert([
            //teluk penyu
            [
                'wisata_id' => '1',
                'user_id' => '1',
                'bulan' => 'januari',
                'nusantara' => '1000',
                'mancanegara' => '0',
                'jumlah' => '1000',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '1',
                'user_id' => '1',
                'bulan' => 'februari',
                'nusantara' => '900',
                'mancanegara' => '0',
                'jumlah' => '900',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '1',
                'user_id' => '1',
                'bulan' => 'maret',
                'nusantara' => '1100',
                'mancanegara' => '0',
                'jumlah' => '1100',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '1',
                'user_id' => '1',
                'bulan' => 'april',
                'nusantara' => '1100',
                'mancanegara' => '0',
                'jumlah' => '1100',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '1',
                'user_id' => '1',
                'bulan' => 'mei',
                'nusantara' => '1100',
                'mancanegara' => '0',
                'jumlah' => '1100',
                'tahun' => '2023'
            ],

            //benteng pendem
            [
                'wisata_id' => '2',
                'user_id' => '2',
                'bulan' => 'januari',
                'nusantara' => '1000',
                'mancanegara' => '0',
                'jumlah' => '1000',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '2',
                'user_id' => '2',
                'bulan' => 'februari',
                'nusantara' => '900',
                'mancanegara' => '0',
                'jumlah' => '900',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '2',
                'user_id' => '2',
                'bulan' => 'maret',
                'nusantara' => '1100',
                'mancanegara' => '0',
                'jumlah' => '1100',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '2',
                'user_id' => '2',
                'bulan' => 'april',
                'nusantara' => '1000',
                'mancanegara' => '0',
                'jumlah' => '1000',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '2',
                'user_id' => '2',
                'bulan' => 'mei',
                'nusantara' => '1000',
                'mancanegara' => '0',
                'jumlah' => '1000',
                'tahun' => '2023'
            ],
            //havana Hills
            [
                'wisata_id' => '16',
                'user_id' => '16',
                'bulan' => 'januari',
                'nusantara' => '1000',
                'mancanegara' => '0',
                'jumlah' => '1000',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '16',
                'user_id' => '16',
                'bulan' => 'februari',
                'nusantara' => '900',
                'mancanegara' => '0',
                'jumlah' => '900',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '16',
                'user_id' => '16',
                'bulan' => 'maret',
                'nusantara' => '1100',
                'mancanegara' => '0',
                'jumlah' => '1100',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '16',
                'user_id' => '16',
                'bulan' => 'april',
                'nusantara' => '1000',
                'mancanegara' => '0',
                'jumlah' => '1000',
                'tahun' => '2023'
            ],
            [
                'wisata_id' => '16',
                'user_id' => '16',
                'bulan' => 'mei',
                'nusantara' => '1100',
                'mancanegara' => '0',
                'jumlah' => '1100',
                'tahun' => '2023'
            ],
        ]);
    }
}
