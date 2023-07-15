<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Jarak;
use App\Models\Kecamatan;
use App\Models\Pengunjung;
use App\Models\Status;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            KecamatanSeeder::class,
            WisataSeeder::class,
            HotelSeeder::class,
            JarakSeeder::class,
            PengunjungSeeder::class,
        ]);

        // User::create([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'email' => 'admin@email.com',
        //     'password' => bcrypt(12345),
        //     'user_role' => 'admin'
        // ]);
        // User::create([
        //     'name' => 'Pengelola',
        //     'username' => 'pengelola',
        //     'email' => 'pengelola@email.com',
        //     'password' => bcrypt(12345),
        //     'user_role' => 'editor'
        // ]);
        // User::create([
        //     'name' => 'Eko Budiono',
        //     'username' => 'ekobudiono',
        //     'email' => 'eko@gmail.com',
        //     'password' => bcrypt(12345),
        //     'user_role' => 'user'
        // ]);

        // User::factory(3)->create();

        // Wisata::factory(5)->create();


        // User::create([
        //     'name' => 'Turman',
        //     'email' => 'turman@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        // Category::create([
        //     'name' => 'Wisata Alam',
        //     'slug' => 'wisata-alam'
        // ]);

        // Category::create([
        //     'name' => 'Wisata Budaya',
        //     'slug' => 'wisata-budaya'
        // ]);

        // Category::create([
        //     'name' => 'Desa Wisata',
        //     'slug' => 'desa-wisata'
        // ]);

        // Kecamatan::create([
        //     'name' => 'Cilacap Selatan',
        //     'slug' => 'cilacap-selatan'
        // ]);
        // Kecamatan::create([
        //     'name' => 'Cilacap Utara',
        //     'slug' => 'cilacap-utara'
        // ]);
        // Kecamatan::create([
        //     'name' => 'Cilacap Tengah',
        //     'slug' => 'cilacap-tengah'
        // ]);

        // Kecamatan::create([
        //     'name' => 'Binangun',
        //     'slug' => 'binangun'
        // ]);
        // Kecamatan::create([
        //     'name' => 'Bantarsari',
        //     'slug' => 'bantarsari'
        // ]);

        // Wisata::create([
        //     'title' => 'Pantai teluk Penyu',
        //     'slug' => 'pantai-teluk-penyu',
        //     'alamat' => 'Jalan Pasir Emas, Cilacap, Jawa Tengah',
        //     'body' => 'Cilacap, Cilacap Selatan, Pandanarang, Cilacap, Cilacap Sel., Kabupaten Cilacap, Jawa Tengah Pantai Teluk Penyu terletak di dalam kota Cilacap, tepatnya di Kelurahan Cilacap, Kecamatan Cilacap Selatan. Obyek Wisata ini merupakan obyek wisata andalan yang dimiliki Kabupaten Cilacap, jaraknya sangat dekat dengan Pusat Pemerintahan / Pusat Kota yaitu hanya sekitar ± 2 km. Panorama Pulau Nusakambangan dan Kapal Tanker pengangkut minyak yang menjadi pemandangan khas pantai ini. Pantai ini berpasir dan banyak ditumbuhi pepohonan sehingga memberikan rasa keteduhan bagi para pengunjung. Panorama keindahan Pantai laut yang indah ternyata dapat dinikmati oleh wisatawan tidak hanya pada saat matahari terbit pagi hari tapi juga matahari terbenam pada sore hari (sunset) di ujung sisi selatan. Pantai Teluk Penyu terdapat daya tarik wisata Benteng pendem dan Kilang pengolahan minyak milik PT. Pertamina, dimana lokasi ini menjadi obyek vital nasioal. Berbagai makanan khas hasil laut dan cinderamata dapat dijumpai dengan mudah di sepanjang pantai dan dapat dijumpai dan selalu dekat dengan wisatawan yang berkunjung ke pantai Teluk Penyu sepanjang hari hingga tengah malam.',
        //     'lat' => '-7.734585',
        //     'lng' => '109.021429',
        //     'user_id' => '1',
        //     'category_id' => '1',
        //     'kecamatan_id' => '1'
        // ]);

        // Wisata::create([
        //     'title' => 'Pantai Indah Widarapayung',
        //     'slug' => 'pantai-indah-widarapayung',
        //     'alamat' => 'Widarapayung Wetan, Sawah,Ladang, Sidayu, Kec. Binangun, Kabupaten Cilacap, Jawa Tengah 53281',
        //     'body' => 'Merupakan objek wisata pantai dengan luas sekitar 500 hektar terletak di Desa Widarapayung Kecamatan Binangun atau terletak ± 35 km arah timur dari Kota Cilacap. Kondisi pantainya sangat landai dengan dipagari pohon kelapa sehingga menjadikan pantai sejuk. Pantai ini terletak di Desa Widarapayung Kecamatan Binangun atau 35 km arah Timur dari kota Cilacap. Untuk menuju Pantai Widarapayung sangatlah mudah bisa menggunakan angkutan umum bus jurusan Cilacap – Gombong atau kendaraan pribadi karena letaknya di Jalan Lintas Selatan – Selatan. Fasilitas yang ada di Pantai Widarapayung: jalan yang beraspal, Shelter (tempat berteduh), Gardu Pandang, Kolam Renang, Tempat Parkir, Warung Makan, dan Kesenian Daerah. Di Pantai Indah widarapayung ini juga telah disiapkan tenaga keamanan penjaga pantai (Search & Rescue) demi terciptanya suasana aman bagi pengunjung. Pantai yang sebelumnya dikelola oleh Desa ini mulai tahun 2015 dikelola oleh Dinas Pariwisata dan Kebudayaan Kabupaten Cilacap. Penataanpun mulai dilakukan baik secara bangunan fisik dan secara perilaku masyarakat. Pantai yang sangat menarik pada waktu sore hari ini sering digunakan masyarakat sekitar untuk beraktualisasi diri dan bersosialisai sehingga akan ditemukan atraksi sosial di sepanjang pantai ini.',
        //     'lat' => '-7.698045460380414',
        //     'lng' => '109.26394794418752',
        //     'user_id' => '1',
        //     'category_id' => '1',
        //     'kecamatan_id' => '4'
        // ]);

        // Wisata::create([
        //     'title' => 'Benteng pendem',
        //     'slug' => 'benteng-pendem',
        //     'alamat' => 'Jl. Benteng, Sentolokawat, Cilacap, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53211',
        //     'body' => 'Benteng Pendem Cilacap atau dalam bahasa Belanda disebut “KUSBATTERIJ OP DE LANTONG TE TJILATJAP” terletak 0,5 Km ke arah selatan dari obyek wisata pantai Teluk Penyu. Bangunan Benteng Pendem ini memiliki konfigurasi yang masih kokoh diantaranya barak/ ruang perajurit, klinik, terowongan, penjara, ruang amunisi, ruang tembak yang dikelilingi oleh pagar dan parit tertimbun tanah sedalam 1-3 meter. Serta landasan meriam disisi timur dan 5 landasan di sisi selatan. Dibangun oleh Tentara Kerajaan Belanda tahun 1861 sampai dengan 1879 untuk pertahanan Belanda menghadapi serangan musuh baik dari luar maupun dari dalam sampai dengan tahun 1942 . Pada tahun 1952 -1962 menjadi markas banteng loreng kesatuan Jawa Tengah dan pada tahun 1962-1965 menjadi tempat pendaratan laut pasukan RPKAD. Benteng ini juga dikelilingi dengan parit selebar 18 meter kedalaman 3 meter berfungsi untuk menghambat lajunya musuh. Didalam Benteng saat ini terdapat rusa yang dibiarkan berkeliaran bebas didalam areal benteng. Rusa rusa ini setiap tahunnya bertambah banyak sehingga dapat menjadi atraksi bagi wisatawan saat memberi makan rusa rusa tersebut.',
        //     'lat' => '-7.748973',
        //     'lng' => '109.019049',
        //     'user_id' => '2',
        //     'category_id' => '2',
        //     'kecamatan_id' => '1'
        // ]);

        // Pengunjung::create([
        //     'wisata_id' => '1',
        //     'user_id' => '1',
        //     'jumlah' => '500',
        //     'bulan' => 'maret',
        //     'tahun' => '2023'
        // ]);
        // Pengunjung::create([
        //     'wisata_id' => '2',
        //     'user_id' => '1',
        //     'jumlah' => '300',
        //     'bulan' => 'februari',
        //     'tahun' => '2023'
        // ]);
        // Pengunjung::create([
        //     'wisata_id' => '3',
        //     'user_id' => '2',
        //     'jumlah' => '200',
        //     'bulan' => 'februari',
        //     'tahun' => '2023'
        // ]);

        // Hotel::create([
        //     'kecamatan_id' => '1',
        //     'name' => 'Hotel Dafam Cilacap',
        //     'slug' => 'hotel-dafam-cilacap',
        //     'bintang' => '3',
        //     'alamat' => 'Jalan Dr. Wahidin No. 5-15, Cilacap 53212 Central Java',
        //     'body' => 'Hotel Dafam Cilacap is the shining three-star hotel in Cilacap. The hotel is ideally located near government and business district, shopping center as well as the exotic Teluk Penyu beach. Hotel Dafam Cilacap is just a few minutes drive from railway station and airport. 10 minutes boat ride to Nusa Kambangan Island from Teluk Penyu Beach and 15 minutes drive from Benteng Pendem fortress. It’s a reliable hotel for travelers who look for the exceptionally good value, luxurious and comfortable accommodation. Serving to give the most luxurious experience for anyone choosing to stay. Hotel Dafam Cilacap offers 102 comfortable rooms, consist of 22 Superior Rooms, 26 Deluxe Rooms, 6 Deluxe pool view, 37 Executive Rooms, 5 Executive pool view, 5 Suite Rooms and 1 Royal Suite Room. All rooms equipped with LCD flat TV with cable channels, keycard censored, free broadband and wifi internet access, individual air conditioning control and other facilities that make you feel comfort and satisfaction.',
        //     'lat' => '-7.731871684352632',
        //     'lng' => '109.01497636441765'
        // ]);

        Status::create([
            'keterangan' => 'Pendaftar Baru'
        ]);
        Status::create([
            'keterangan' => 'Seleksi Berkas'
        ]);
        Status::create([
            'keterangan' => 'Lengkapi Berkas'
        ]);
        Status::create([
            'keterangan' => 'Seleksi Kondisi dan Lokasi'
        ]);

        Status::create([
            'keterangan' => 'Lulus Verifikasi'
        ]);
        Status::create([
            'keterangan' => 'Ditolak'
        ]);

        // Jarak::create([
        //     'wisata_id' => '1',
        //     'hotel_id' => '1',
        //     'jarak' => '10'
        // ]);
    }
}
