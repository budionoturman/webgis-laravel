<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wisatas')->delete();
        DB::table('wisatas')->insert([
            // 1. pantai teluk penyu
            [
                'title' => 'Pantai teluk Penyu',
                'slug' => 'pantai-teluk-penyu',
                'alamat' => 'Kelurahan Cilacap Kec. Cilacap Selatan Kab. Cilacap',
                'body' => 'Cilacap, Cilacap Selatan, Pandanarang, Cilacap, Cilacap Sel., Kabupaten Cilacap, Jawa Tengah Pantai Teluk Penyu terletak di dalam kota Cilacap, tepatnya di Kelurahan Cilacap, Kecamatan Cilacap Selatan. Obyek Wisata ini merupakan obyek wisata andalan yang dimiliki Kabupaten Cilacap, jaraknya sangat dekat dengan Pusat Pemerintahan / Pusat Kota yaitu hanya sekitar ± 2 km. Panorama Pulau Nusakambangan dan Kapal Tanker pengangkut minyak yang menjadi pemandangan khas pantai ini. Pantai ini berpasir dan banyak ditumbuhi pepohonan sehingga memberikan rasa keteduhan bagi para pengunjung. Panorama keindahan Pantai laut yang indah ternyata dapat dinikmati oleh wisatawan tidak hanya pada saat matahari terbit pagi hari tapi juga matahari terbenam pada sore hari (sunset) di ujung sisi selatan. Pantai Teluk Penyu terdapat daya tarik wisata Benteng pendem dan Kilang pengolahan minyak milik PT. Pertamina, dimana lokasi ini menjadi obyek vital nasioal. Berbagai makanan khas hasil laut dan cinderamata dapat dijumpai dengan mudah di sepanjang pantai dan dapat dijumpai dan selalu dekat dengan wisatawan yang berkunjung ke pantai Teluk Penyu sepanjang hari hingga tengah malam.',
                'lat' => '-7.734585',
                'lng' => '109.021429',
                'user_id' => '1',
                'category_id' => '1',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 2. Benteng pendem
            [
                'title' => 'Benteng Pendem',
                'slug' => 'benteng-pendem',
                'alamat' => 'Kelurahan Cilacap Kec. Cilacap Selatan Kab. Cilacap',
                'body' => 'Benteng Pendem Cilacap atau dalam bahasa belanda disebut “KUSBATTERIJ OF DE LANTONG TE TJILATJAP” terletak 0,5 km ke arah selatan dari obyek wisata Pantai Teluk Penyu. Bangunan Benteng Pendem ini memiliki konfigurasi yang masih kokoh diantaranya barak / ruang prajurit, klinik, terowongan, penjara, ruang amunisi,  ruang tembak yang dikelilingi oleh pagar dan parit tertimbun  tanah sedalam 1-3 meter. Serta landasan meriam disisi timur dan 5 landasan di sisi selatan.
                Dibangun oleh Tentara Kerajaan Belanda tahun 1861 sampai dengan 1879 untuk pertahanan Belanda menghadapi serangan musuh baik dari luar maupun dari dalam sampai dengan tahun 1942. Pada tahun 1952 – 1962 menjadi markas banteng loreng kesatuan Jawa Tengah dan tahun 1962 – 1965 menjadi tempat pendaratan laut  pasukan RPKAD.
                Benteng ini juga dikelilingi dengan parit selebar 18 meter kedalaman 3 meter berfungsi untuk menghambat lajunya musuh. Di dalam Benteng saat ini tedapat rusa yang di biarkan berkeliaraan bebas didalam areal Benteng. Rusa- rusa ini setiap tahunnya bertambah banyak sehingga dapat menjadi atraksi bagi wisatawan saat memberi makan rusa rusa tersebut.
                ',
                'lat' => '-7.74865551315451',
                'lng' => '109.018971125261',
                'user_id' => '2',
                'category_id' => '2',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 3. Pantai Kamulyan
            [
                'title' => 'Pantai Kamulyan',
                'slug' => 'pantai-kamulyan',
                'alamat' => 'Kelurahan Tegalkamulyan Kec. Cilacap Selatan Kab. Cilacap',
                'body' => 'Lokasi pantai ini juga tak jauh dari Pantai Teluk Penyu. Pantai ini berada di ujung Jalan Kalimantan Kelurahan Tegalkamulyan Kecamatan Cilacap Selatan. Jika ditempuh dari Pantai Teluk Penyu, jaraknya kurang lebih satu kilometer. Namun patokan yang paling mudah adalah dari Terminal Bus Cilacap. Dari arah terminal, pantai ini berada di ujung timur dengan jarak sekitar 600-an meter. Pengunjung bisa menikmati view pantai dengan latar belakang  Pulau Nusakambangan maupun aktivitas kapal tanker mkinayk mentah yang baru melakukan bongkar muatan di dermaga Pertamina.',
                'lat' => '-7.710018719630037',
                'lng' => '109.03707751286582',
                'user_id' => '3',
                'category_id' => '1',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 4. Pulau Nusakambang
            [
                'title' => 'Pulau Nusakambang',
                'slug' => 'pulau-nusakambang',
                'alamat' => 'Kelurahan Tambakreja Kec. Cilacap Selatan Kab. Cilacap',
                'body' => 'Nusakambangan adalah sebuah pulau di Jawa Tengah yang lebih dikenal sebagai tempat terletaknya beberapa Lembaga Pemasyarakatan (Lapas) berkeamanan tinggi di Indonesia. Secara Geografis, pulau ini masuk dalam wilayah administratif Kabupaten Cilacap dan tercatat dalam daftar pulau terluar Indonesia.',
                'lat' => '-7.760000527601201',
                'lng' => '109.04235606692241',
                'user_id' => '4',
                'category_id' => '1',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 5. Pantai Widarapayung
            [
                'title' => 'Pantai Widarapayung',
                'slug' => 'pantai-widarapayung',
                'alamat' => 'Desa Widarapayung Wetan Kec. Binangun Kab. Cilacap',
                'body' => 'Merupakan obyek wisata pantai dengan luas 500 hektar di Desa Widarapayung Wetan Kecamatan Binangun atau terletak + 35 km arah timur dari Kota Cilacap. Kondisi pantainya sangat landai dengan dipagari pohon kelapa sehingga menjadikan pantai sejuk.
                Untuk menuju Pantai Indah Widarapayung sangatlah mudah bisa menggunakan angkutan umum bus jurusan Cilacap-Gombong atau kendaraan pribadi karena letaknya dijalan lintas Selatan-Selatan. Fasilitas yang ada di Pantai Indah Widarapayung jalan beraspal, Shelter ( tempat berteduh), Gardu Pandang, Kolam Renang, Tempat Parkir, Warung Makan, dan Kesenian Daerah. Di Pantai Indah Widarapayung ini juga telah disiapkan tenaga keamanan penjaga pantai ( Search & Rescue) demi terciptanya suasana aman bagi pengunjung.  
                Pantai yang sebelumnya dikelola oleh Desa ini mulai tahun 2015 dikelola oleh Dinas Pariwisata dan Kebudayaan Kabupaten Cilacap. Penataanpun mulai dilakukan baik secara bangunan fisik dan secara perilaku masyarakat. Pantai yang sangat menarik pada waktu sore hari ini sering di gunakan masyarakat sekitar untuk beraktualisasi diri dan bersosialisasi sehingga akan ditemukan atraksi sosial di sepanjang pantai ini',
                'lat' => '-7.6934765355911185',
                'lng' => '109.25364125633307',
                'user_id' => '5',
                'category_id' => '1',
                'kecamatan_id' => '20',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 6. Pantai ketapang Indah
            [
                'title' => 'Pantai Ketapang Indah',
                'slug' => 'pantai-ketapang-indah',
                'alamat' => 'Desa Sidaurip Kec. Binangun Kab. Cilacap',
                'body' => 'Selain Pantai Indah Widarapayung ke arah Timur + 3 km ada pantai yang menarik lagi yaitu Pantai Ketapang Indah yang terletak di Desa Sidaurip Kecamatan Nusawungu, dengan luas 10 Ha. Pantai Ketapang Indah merupakan gugusan pantai-pantai lain yang menghadap Samudra Indonesia. Disepanjang obyek wisata ini merupakan kebun kelapa yang dimiliki warga sekitar untuk diambil air niranya yang digunakan sebagai bahan membuat gula kelapa.
                Obyek ini menawarkan panorama pantai yang indah di tumbuhi pohon kelapa dan gelombang laut yang digunakan untuk Selancar Air. Fasilitas yang ada tempat parkir yang bebas, tempat berteduh dibawah pohon kelapa dan kios-kios cindera mata sudah tertata dengan baik.
                Untuk menuju obyek wisata ini sangatlah mudah karena dapat dilalui kendaraan roda dua maupun roda empat dengan menelusuri jalan beraspal jurusan Cilacap-Gombong.',
                'lat' => '-7.6980909788947045',
                'lng' => '109.28872731846559',
                'user_id' => '6',
                'category_id' => '1',
                'kecamatan_id' => '20',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 7. pantai Sodong
            [
                'title' => 'Pantai Sodong',
                'slug' => 'pantai-sodong',
                'alamat' => 'Desa Karangbenda Kec. Adipala Kab. Cilacap',
                'body' => 'Pantai ini berada dibawah kaki bukit Gunung Selok dan merupakan area bekas pertambangan pasir besi yang sudah direklamasi. Daerah ini sangat teduh karena ditanami banyak sekali pohon cemara laut. Seperti halnya Pantai Cemara Sewu di sepanjang jalan menuju daya tarik wisata ini sangat teduh karena rindangnya pepohonan di daerah ini. 
                Beberapa hal dapat ditemui ditempat ini adalah kolam pemancingan dan goa-goa untuk keperluan ritual dan ziarah. Goa yang terdapat di daerah ini diantaranya Goa Nagaraja, Goa Rahayu dan Goa Pakuwaja. 
                Pemandangan sangat menajubkan dapat dijumpai ketika sore hari, yaitu ketika matahari terbenam. Keindahan sunset ditempat ini mengundang banyak orang untuk menikmatinya ditempat ini. Bersamaan dengan terbenamnya matahari pula jutaan kalelawar pun keluar untuk mencari makan. Kalelawar-kalelawar  ini berterbangan membentuk gugusan awan yang sangat menarik untuk disaksikan.',
                'lat' => '-7.689670237072081',
                'lng' => '109.1751733201047',
                'user_id' => '7',
                'category_id' => '1',
                'kecamatan_id' => '16',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 8. Gunung Selok
            [
                'title' => 'Gunung Selok',
                'slug' => 'gunung-selok',
                'alamat' => 'Desa Karangbenda Kec. Adipala Kab. Cilacap',
                'body' => 'Gunung Selok merupakan daerah perbuktian yang menjulang menyerupai gunung dan kawasan hutan homogen tanaman mahoni. Hutan buatan yang di kelola oleh pihak Kantor Pemangku Hutan (KPH) Banyumas ini terdapat beberapa sanggar yang digunakan untuk ziarah atau beribadah, yaitu Jambe 5, Jambe 7 dan Padepokan Sang Hyang Gunung Jati.
                Tempat-tempat tersebut disinggahi untuk tujuan rohani, terutama Padepokan Sang Hyang Gunung Jati ini merupakan padepokan yang sering didatangi umat Budha. Padepokan ini sangat ramai menjelang bulan Suro dan pengunjung yang melakukan ziarah banyak yang berasal dari luar daerah.  Untuk saat ini Padepokan Sang Hyang Gunung Jati dipimpin seorang Bante bernama Damatejo Tera, disebut Bante karena beliau pernah menikah, dan disebut Biksu apabila tidak pernah menikah.
                Lokasi Gunung Selok berada di Desa Karangbenda Kecamatan Adipala, berjarak 25 km ke arah timur laut Kota Cilacap.',
                'lat' => '-7.684696984043822',
                'lng' => '109.17275778576587',
                'user_id' => '8',
                'category_id' => '1',
                'kecamatan_id' => '16',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 9. Pantai Buton
            [
                'title' => 'Pantai Buton',
                'slug' => 'pantai-buton',
                'alamat' => 'Desa Karangbenda Kec. Adipala Kab. Cilacap',
                'body' => 'Pantai Bunton letaknya agak jauh dari perkotaan. Berada di desa Bunton Kecamatan Adipala, pantai ini juga rimbun oleh cemara laut di sekitarnya. Pantai yang berada bersebelahan dengan PLTU Bunton ini kini lebih teduh dengan adanya cemara laut. Pantai Bunton ini juga di gunakan sebagai daerah penambangan pasir besi, namun kini sudah sebagian lahan sudah direklamasi. Selain bisa menikmati keindahan panorama pantai, wisatawan juga bisa menyaksikan bangunan PLTU Bunton dari jarak yang cukup dekat. Pada hari-hari tertentu, pengunjung juga bisa menyaksikan aktivitas kapal tongkang pengangkut batubara yang melakukan kegiatan bongkar muatan di dermaga yang ada di Pantai Bunton. Ombak Pantai Bunton yang relatif besar, membawa sensasi tersendiri bagi pengunjung pantai ini.',
                'lat' => '-7.688452109275314',
                'lng' => '109.1431300641858',
                'user_id' => '9',
                'category_id' => '1',
                'kecamatan_id' => '16',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 10. Gunung Srandil
            [
                'title' => 'Gunung Srandil',
                'slug' => 'gunung-srandil',
                'alamat' => 'Desa Karangbenda Kec. Adipala Kab. Cilacap',
                'body' => 'Gunung Srandil merupaksn bukti sejarah yang luar biasa di mata masyarakat Indonesia dan juga mata dunia. Merupakan salah satu bukit yang ada di Desa Glempangpasir Kecamatan Adipala jarak antara obyek wisata dengan kota Cilacap 30 km kearah timur laut dan relatif mudah ditempuh dengan kendaraan.
                Gunung Srandil setiap hari dikunjungi orang untuk berziarah oleh karena tempat tersebut tidak hanya dikenal oleh masyarakat sekitar saja tetapi sampai keluar Jawa seperti Sumatra, Kalimantan, Bali dan Sulawesi, maka yang berkunjung tujuannya bermcam-macam. Para peziarah biasanya berjunjung atau bertapa pada malam Jum’at Kliwon atau Selasa Kliwon pada bulan Syura.
                Konon menurut cerita penghuni pertama Gunung Srandil adalah Sultan Mukhriti  putra kedua dari Dewi Sari Banon Ratu Sumenep Jawa Timur. Kedatangan Sultan itu untuk bertapa namun Sultan Mukhriti murca (menghilang) yang ada tinggal pelitasannya yang terletak di sebelah timur yang di kenal dengan Embah Gusti Agung Sultan Mukhriti. Adapun petilasan – petilasan  yang ada di Gunung Srandil adalah Mbah Kanjeng Gusti Agung, Nyai Dewi Tanjung Sekarsari, Kaki Semar Tunggal Sabdojati Dayo Amongrogo, Juragan Dampo Awang dan Petilasan Langlang Buwana yang berada diatas bukit dan petilasan Hyang Sukma Sejati.',
                'lat' => '-7.679943309818566',
                'lng' => '109.19129576249391',
                'user_id' => '10',
                'category_id' => '2',
                'kecamatan_id' => '16',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 11. Susur Sungai dan Batik mangrove
            [
                'title' => 'Susur Sungai dan Batik mangrove',
                'slug' => 'susur-sungai-batik-mangrove',
                'alamat' => 'Kel. Kutawaru Kec. Cilacap Tengah Kab. Cilacap',
                'body' => 'Kelurahan Kutawaru di Kecamatan Cilacap Tengah Kabupaten Cilacap menyimpan potensi alam dan sosial yang dapat dibanggakan. Hal ini telah dipetakan oleh Holcim dengan berbagai program kemitraan yang sudah dan terus dilaksanakan. Saat ini satu program pengembangan wilayah sedang dirintis, yaitu Kutawaru Desa Wisata. Berbagai potensi yang ada di Kutawaru diantaranya industri rumah tangga Batik Mangrove yang telah dikembangkan dengan pewarna alami pohon mangrove, kolam pemancingan dan rekreasi alam, optimalisasi lahan untuk industri penyulingan minyak kayu putih dan budidaya kambing peranakan etawa yang dikelola mandiri oleh warga. Terobosan kedepan untuk menjadikan Kutawaru menjadi Desa Wisata adalah menggabungkan potensi yang ada sehingga terintegrasi satu sama lain ditambah dengan rencana pembangunan wahana wisata track mangrove dan track air (susur kanal dengan perahu).',
                'lat' => '-7.697326936555842',
                'lng' => '108.99054690645126',
                'user_id' => '11',
                'category_id' => '1',
                'kecamatan_id' => '23',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 12. Hutan Payau
            [
                'title' => 'Hutan Payau',
                'slug' => 'hutan-payau',
                'alamat' => 'Kelurahan Tritih Kulon Kec. Cilacap Utara Kab. Cilacap',
                'body' => 'Hutan Payau merupakan daya tarik wisata yang dikelola bersama dengan pihak Perhutani. Kawasan ini menawarkan hutan mangroove yang tertata dengan rapi dan air payau yang merupakan aliran air dari segara anakan.
                Daya tarik wisata ini sebelumnya sering digunakan sebagai obyek penelitian bagi pelajar dan mahasiswa yang khususnya meneliti aneka jenis tanaman bakau (Mangroove), kini sedang dalam tahap perbaikan sarana dan prasarananya. Diharapkan daya tarik wisata ini mampu mendukung program pengembangan pariwisata yang mengusung konsep wisata bahari.',
                'lat' => '-7.667002923729752',
                'lng' => '109.0292350879141',
                'user_id' => '12',
                'category_id' => '1',
                'kecamatan_id' => '24',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 13. Air panas Cipari
            [
                'title' => 'Air Panas Cipari',
                'slug' => 'air-panas-cipari',
                'alamat' => 'Desa Cipari Kec. Cipari Kab. Cilacap',
                'body' => 'Daya tarik wisata ini terletak di Desa Cipari Kecamatan Cipari kurang lebih 2 km dari pusat pemerintahan Kecamatan Cipari dan 60 km dari Kota Cilacap dan mempunyai luas 13.254 m2 .
                Pemandian air panas ini pada awalnya merupakan sebuah sumur air panas yang airnya relatif panas dan mengandung belerang, sumur ini berada dibelakang rumah yang berbentuk  L. Bak mandi terletak lebih rendah sehingga mudah di isi. Meski air panas setiap hari digunakan untuk mandi namun airnya tidak pernah kering dan konon ceritanya air panas tersebut dapat menyembuhkan berbagai penyakit kulit, pegal – pegal dan asam urat.
                Banyak pengunjung yang datang dan mandi merasa cocok karena berbagai penyakit yang di deritanya dapat sembuh dan dianjurkan mandi air panas yang mengandung belerang ini pada malam hari.',
                'lat' => '-7.4303209297867285',
                'lng' => '108.76621180501728',
                'user_id' => '13',
                'category_id' => '1',
                'kecamatan_id' => '6',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 14. Curug Mandala
            [
                'title' => 'Curug Mandala',
                'slug' => 'curug-mandala',
                'alamat' => 'Desa Mandala Kec. Jeruklegi Kab. Cilacap',
                'body' => 'Curug Mandala adalah objek wisata air terjun di Kabupaten Cilacap, Jawa Tengah. Curug ini salah satu curug populer sebagai tujuan rekreasi. Lokasinya yang berada agak jauh ke dalam hutan tidak membuatnya sepi. Air terjun ini justru sering ramai oleh wisatawan lokal hingga sejumlah wisatawan mancanegara.
                Daya tarik utamanya adalah air terjun bertingkat dengan aliran air yang jernih. Untuk menjangkau kawasan air terjun ini juga memerlukan niat dan tenaga ekstra. Memiliki beberapa rute akses, wisatawan bisa memilih yang sesuai dengan selera. Yang pasti, curug ini cocok sebagai destinasi bagi wisatawan yang menyukai trekking dan petualangan.',
                'lat' => '-7.589457053808397',
                'lng' => '109.05443745093888',
                'user_id' => '14',
                'category_id' => '1',
                'kecamatan_id' => '14',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 15. Waduk Kubangkangkung
            [
                'title' => 'Waduk Kubangkangkung',
                'slug' => 'waduk-kubangkangkung',
                'alamat' => 'Desa Kubangkangkung Kec. Kawunganten Kab. Cilacap',
                'body' => 'Waduk Koebangkangkoeng merupakan daya tarik wisata yang terletak di Desa Kubangkangkung Kecamatan Kawunganten. Letaknya sangat strategis karena berada di jalur lingkar selatan untuk jalur Wanareja, Sidareja, Gandrungmangu, Kawunganten hingga Gombong. Wisata ini hanya berjarak sekitar 22 km ke arah barat dari pusat Kota Cilacap.
                Wisata ini dulunya merupakan waduk cantik yang konon dibangun pada masa kolonial Belanda sebagai sumber penyimpanan air bersih. Waduk Koebangkangkoeng mengalami renovasi pada tahun 2014 dan sejak saat itu kawasan ini dibuka sebagai tempat wisata. Kini wajah Waduk Koebangkangkoeng telah berseri dan menjelma menjadi daerah wisata yang banyak dikunjungi wisatawan. Banyak para wisatawan yang selalu mampir kesana untuk istirahat sejenak sambil menikmati pemandangan alam yang asri ditambah lagi udara di sekitar waduk ini sangat sejuk karena banyak tumbuhan pohon karet di sekelilingnya.
                Lokasi ini sangat cocok untuk foto-foto selfie, foto prawedding atau buat nge-Vlog. Selain itu wisatawan juga dapat menikmati bermacam-macam wahana yang ada, diantaranya Ayunan dan Jembatan Gantung dengan background hutan pohon karet dan waduk yang sangat indah, Dermaga Foto, Area Outbond, dan wisata air serta wahana lain yang lebih menarik.',
                'lat' => '-7.6122123937530795',
                'lng' => '108.96060160117068',
                'user_id' => '15',
                'category_id' => '1',
                'kecamatan_id' => '12',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 16. Havana Hills
            [
                'title' => 'Havana Hills',
                'slug' => 'havana-hills',
                'alamat' => 'Desa Jeruklegi Kulon Kec. Jeruklegi Kab. Cilacap',
                'body' => 'Havana Hills',
                'lat' => '-7.61303',
                'lng' => '109.01616',
                'user_id' => '16',
                'category_id' => '1',
                'kecamatan_id' => '14',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 17. Goa Masigitsela
            [
                'title' => 'Goa Masigitsela',
                'slug' => 'goa-masigitsela',
                'alamat' => 'Desa Ujungalang Kec. Kampung Laut Kab. Cilacap',
                'body' => 'Goa yang merupakan salah satu situs atau lokasi napak tilas dari perjuangan kerajaan mataram melawan penjajah ini terletak di kawasan Kampung Laut, Nusakambangan. Disebut Masigitsela karena kata tersebut sebenarnya mengandung arti masjid yang terbuat dari batu, masigit berarti masjid dan sela menyerupai kubah masjid.
                Hingga saat ini goa yang memiliki tiang batu ini digunakan sebagai wisata religi atau ziarah. Terdapat stalagtit dan stalagmit yang membentuk obyek – obyek menyerupai beberapa benda, diantaraya adalah menyerupai Gong. Terlebih tiang batu yang terdapat didalam goa ini dipercaya apabila mampu merengkuhnya maka keinginannya akan dapat terkabul.
                Goa ini terletak di Pulau Nusakambangan bagian barat sisi utara yang berdekatan dengan Kecamatan Kampung Laut ( Klaces).',
                'lat' => '-7.698997696695231',
                'lng' => '108.8489114034501',
                'user_id' => '17',
                'category_id' => '2',
                'kecamatan_id' => '13',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 18. Museum Soesilo Soedirman
            [
                'title' => 'Museum Soesilo Soedirman',
                'slug' => 'museum-soesilo-soedirman',
                'alamat' => 'Desa Gentasari Kec. Kroya Kab. Cilacap',
                'body' => 'Museum Soesilo Soedarman ini didirikan di Desa Gentasari, Kecamatan Kroya. Museum ini menempati Pendopo Wisma Mbah Ageng yang dibangun pada tahun 1899 oleh Eyang Dipakarsa, Penatus Pertama Desa Gentasari, yang merupakan Eyang Buyut dari Soesilo Soedarman. Museum ini berisi mengenai perjalanan karir Soesilo Soedarman mulai dari masa kecil hingga berkarir di militer hingga menjadi diplomat. Ragam penugasan dari seorang Perwira Operasi, Komandan Pasukan, Pendidik, sampai menjadi Panglima Komandan Wilayah Pertahanan, dengan pangkat Letnan Jenderal TNI. Ia meraih pangkat Jenderal TNI, Bintang Empat, pada tahun 1993, saat menjabat sebagai Menko Polkam, Kabinet Pembangunan VI, berikutnya menjabat sebagai Menteri Pariwisata, Pos dan Telekomunikasi.
                Koleksi yang dimiliki mulai dari surat-surat perjalanan, foto-foto kegiatan,  senjata laras pendek hingga senjata artileri. Museum yang menyimpan beberapa jenis pesawat dan kendaraan lapis baja ini juga memiliki perpustakaan dan taman bermain. Kolam renang yang di bangun cukup menarik minat wisatawan untuk datang ke museum  ini.',
                'lat' => '-7.595253925206353',
                'lng' => '109.21246592884289',
                'user_id' => '18',
                'category_id' => '2',
                'kecamatan_id' => '19',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 19. Kemit Forest Education
            [
                'title' => 'Kemit Forest Education',
                'slug' => 'kemit-forest-education',
                'alamat' => 'Desa Karanggedang Kec. Sidareja Kab. Cilacap',
                'body' => 'Kemit Forest Education merupakan daya tarik wisata yang terletak di Desa Karang Gedang Kecamatan Sidareja atau sekitar 50 km ke arah barat dari pusat Kota Cilacap. Akses jalan menuju wisata ini tergolong mudah karena dapat ditempuh oleh semua jenis kendaraan.
                Wisata ini dulunya merupakan hutan produksi pinus kemudian dialihkan menjadi hutan wisata dengan luas area 5 Ha. Nama “kemit” sendiri diambil dari nama “lembah” yang terdapat di sekitar wisata ini, sedangkan untuk “forest” yang diartikan sebagai “hutan”.
                Kemit Forest Education ditetapkan pada 27 Nopember 2016. Wisata ini dibuka setiap hari mulai pukul 07.30 WIB sampai dengan pukul 17.30 WIB. Pada pagi hari wisatawan dapat merasakan sejuknya udara khas hutan pinus dan menikmati rerimbunan pohon pinus yang tentunya dapat memanjakan mata. Lokasi ini sangat cocok untuk foto-foto selfie, foto prawedding atau buat nge-Vlog.
                Harga tiket masuk wisata ini tergolong murah disamping wisatawan dapat sepuasnya menikmati bermacam-macam wahana yang ada. Wahana yang ada diantaranya Lapangan anak dengan rumput sintetis, Ayunan dan Sepeda Gantung serta Jembatan Merah dengan background lembah hutan pinus dan sawah, Dermaga Foto, Hammock, Komedi Putar dan Lapangan Memanah serta wahana lain yang lebih menarik.',
                'lat' => '-7.463760230389765',
                'lng' => '108.84042725123196',
                'user_id' => '19',
                'category_id' => '1',
                'kecamatan_id' => '7',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 20. Pantai Congot jetis
            [
                'title' => 'Pantai Congot jetis',
                'slug' => 'pantai-congot-jetis',
                'alamat' => 'Desa Jetis Kec. Nusawungu Kab. Cilacap',
                'body' => 'Pantai yang berbatasan dengan obyek wisata Pantai Ayah Kebumen ini terletak di Desa Jetis Kecamatan Nusawungu. Sebenarnya di Desa Jetis ini ada 3 pantai yang sangat menarik yaitu Pantai Cemara Sewu, Pantai Bungso dan Pantai Congot. Pantai Indah Jetis disebut juga pantai Cemara Sewu karena terdapat banyak pohon cemara laut yang ditanami sebagai penghijauan di wilayah ini tumbuh subur. Daya taik wisata ini menawarkan keindahan panorama ombak laut selatan dan pemandangan alam pegunungan serta keindahan alur Sungai Bodo. Pantai ini terletak + 40 km ke arah timur dari Kota Cilacap, dengan menggunakan kendaraan pribadi atau umum melalui jalur selatan – selatan jurusan Cilacap – Jatijajar - Gombong. Pada daya tarik wisata ini terdapat tempat pelelangan ikan tradisional TPI Congot yang ramai dikunjungi para pedagang dan pembeli.
                Pantai yang sangat rindang oleh pohon cemara laut ini sangat teduh saat berada diantaranya pepohonan. Disepanjang jalan menuju pantai ini terdapat kebun semangka, melon dan jenis timun suri.  Beberapa petani juga turut menjajakan hasil kebun mereka disepanjang jalan.',
                'lat' => '-7.724173426198363',
                'lng' => '109.38664376524234',
                'user_id' => '20',
                'category_id' => '1',
                'kecamatan_id' => '21',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 21. Pantai Bungso jetis
            [
                'title' => 'Pantai Bungso Jetis',
                'slug' => 'pantai-bungso-jetis',
                'alamat' => 'Desa Jetis Kec. Nusawungu Kab. Cilacap',
                'body' => 'Pantai Bungso Jetis terletak di Desa Jetis Kecamatan Nusawungu. Pantai Bungso merupakan pantai yang masih berada di Desa wisata karangbanar letak pantai bungso berada ditimur pantai cemara sewu berkisar jarak kurang lebih 200m, sedikit berbeda dengan pantai terdekatnya cemara sewu yang menawarkan suasana pantai dengan banyak pohon cemara, pantai bungso lebih banyak menawarkan hasil panen pertanian Desa Jetis yang terkenal yaitu buah Semangka juga memiliki kolam renang anak-anak sehingga pas untuk destination wisata anda sekeluarga, tak heran pantai ini banyak dikunjungi wisatawan domestik dihari libur maupun hari-hari biasa.
                Pantai ini berpasir dan banyak ditumbuhi pepohonan sehingga memberikan rasa sejuk, hal yang menarik bagi pengunjung adalah mudahnya bagi wisatawan untuk mendekat ke Pantai dan bermain – main air laut disepanjang pantai. Panorama keindahan Pantai laut yang indah ternyata dapat dinikmati oleh wisatawan tidak hanya pada saat matahari terbit pagi hari ( Sun Rise ) tapi juga matahari terbanam pada sore hari ( Sun Seet ). Pantai Bungso Jetis  disamping sebagai salah satu tujuan wisata juga sebagai tempat pemukiman para Nelayan tradisional dengan berbagai aktivitasnya.',
                'lat' => '-7.721778161364206',
                'lng' => '109.3926598252606',
                'user_id' => '21',
                'category_id' => '1',
                'kecamatan_id' => '21',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
        ]);
    }
}
