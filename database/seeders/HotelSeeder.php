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
        DB::table('hotels')->delete();
        DB::table('hotels')->insert([
            // 1. Azana Hotel
            [
                'name' => 'Azana Asia Hotel',
                'slug' => 'azana-asia-hotel',
                'alamat' => 'Jl. Gatot Subroto No.120, Wanasari, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53223',
                'bintang' => '3',
                'body' => 'Azana Asia Cilacap is a residence located in Sidanegara, Central Cilacap, Cilacap. The atmosphere of the room is clean and comfortable, perfect for those of you who are going on vacation or on a business visit. A strategic location so that it is easy to access, and an affordable price can be your choice of travel accommodation.',
                'lat' => '-7.7107469161411695',
                'lng' => '109.01820563963183',
                'kecamatan_id' => '23',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 2. Paradise Hotel
            [
                'name' => 'Paradise Hotel',
                'slug' => 'paradise-hotel',
                'alamat' => 'Jl. Jenderal Ahmad Yani No.63, Kauman, Gunungreja, Kec. Sidareja, Kabupaten Cilacap, Jawa Tengah 53261',
                'bintang' => '2',
                'body' => 'Hotel Paradise berlokasi di Jl. Jenderal Ahmad Yani No. 63, Kauman, Gunungrejo, Sidareja, Cilacap, Jawa Tengah dan dekat Kemit Forest Education. Dari penginapan menuju tempat wisata, Anda membutuhkan waktu tempuh sekitar delapan menit menggunakan kendaraan bermotor.',
                'lat' => '-7.4839049547732905',
                'lng' => '108.7889689033583',
                'kecamatan_id' => '7',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 3. Fortune Hotel
            [
                'name' => 'Fortune Hotel',
                'slug' => 'fortuna-hotel',
                'alamat' => 'Sidareja, Kec. Sidareja, Kabupaten Cilacap, Jawa Tengah 53261',
                'bintang' => '1',
                'body' => 'Hotel baru berdiri di sidareja',
                'lat' => '-7.486008503881471',
                'lng' => '108.79151163733144',
                'kecamatan_id' => '7',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 4. Mekar Mulya Hotel
            [
                'name' => 'Mekar Mulya Hotel',
                'slug' => 'mekar-mulya-hotel',
                'alamat' => 'Jl. Jenderal Sudirman No.7, Sidamulya, Kec. Sidareja, Kabupaten Cilacap, Jawa Tengah 53261',
                'bintang' => '2',
                'body' => 'Hotel Mekar Mulya merupakan salah satu hotel yang ada di Cilacap yang cocok untuk tempat beristirahat. dengan tarif yang cukup terjangkau menjadikan hotel ini pilihan yang bagus bagi wisatawan yang ingin menghemat pengeluaran perjalanan',
                'lat' => '-7.486014709519329',
                'lng' => '108.80580312402725',
                'kecamatan_id' => '7',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 5. Hotel Homira
            [
                'name' => 'Hotel Homira',
                'slug' => 'hotel-omira',
                'alamat' => 'Jl. Matahari No.3, Sindangsari, Kec. Majenang, Kabupaten Cilacap, Jawa Tengah 53257',
                'bintang' => '1',
                'body' => 'Selamat datang di Hotel terbaik Homira Hotel Majenang. Kami menawarkan hotel yang nyaman, bersih, dengan pelayanan yang ramah dari pegawai kami. Kami menyedian kamar untuk keluarga ataupun single room sesuai dengan yang Anda butuhkan. Pelayanan yang ramah tamah merupakan prioritas kami. Restoran memiliki citarasa makanan dan minuman yang enak dan ruangan yang nyaman. Kami memiliki fasilitas umum dengan parkir yang luas dan aman, mushola, lobby modern dan nyaman, serta smoking room.',
                'lat' => '-7.3016419196168565',
                'lng' => '108.77128888310796',
                'kecamatan_id' => '3',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 6. Hotel Permata Majenang
            [
                'name' => 'Hotel Permata Majenang',
                'slug' => 'hotel-permata-majenang',
                'alamat' => 'Jl. Kapt. Suyono No.41, Kenangasari, Mulyasari, Kec. Majenang, Kabupaten Cilacap, Jawa Tengah 53257',
                'bintang' => '1',
                'body' => 'Permata Hotel adalah salah satu hotel di kota Majenang. Berdiri sejak tahun 2002 dan berlokasi di kawasan strategis.
                    Itu adalah tempat yang bagus untuk tinggal ketika Anda berada di Majenang.
                    - Hanya butuh 3 menit berjalan kaki dari Alun-Alun Majenang
                    - Hanya butuh 3 menit berkendara dari Rumah Sakit Umum Majenang
                    - Terletak di area kuliner Majenang',
                'lat' => '-7.300981315157146',
                'lng' => '108.76278067300925',
                'kecamatan_id' => '3',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 7. Hotel Sodong Indah
            [
                'name' => 'Hotel Sodong Indah',
                'slug' => 'hotel-sodong-indah',
                'alamat' => '858P+J29, Sondong, Karangbenda, Kec. Adipala, Kabupaten Cilacap, Jawa Tengah 53271',
                'bintang' => '1',
                'body' => 'Hotel Sodong Indah terletak di Kabupaten Cilacap, Jawa Tengah. Perusahaan ini bekerja di industri berikut: Hotel dan motel.',
                'lat' => '-7.682604436622485',
                'lng' => '109.18508080280994',
                'kecamatan_id' => '16',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 8. Hotel Central Nusawungu
            [
                'name' => 'Hotel Central Nusawungu',
                'slug' => 'hotel-central-nusawungu',
                'alamat' => 'Siapit, Karangpakis, Kec. Nusawungu, Kabupaten Cilacap, Jawa Tengah 53283',
                'bintang' => '1',
                'body' => 'Hotel Central Nusawungu',
                'lat' => '-7.697319521399806',
                'lng' => '109.35182797038121',
                'kecamatan_id' => '21',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 9. Hotel Sidodadi
            [
                'name' => 'Hotel Sidodadi',
                'slug' => 'hotel-sidodadi',
                'alamat' => 'Jalan station kroya RT 04 RW 03 Rumah bedeng no.7A, Semingkir, Bajing, Kec. Kroya, Kabupaten Cilacap, Jawa Tengah 53282',
                'bintang' => '1',
                'body' => 'Pilihan akomodasi ideal untuk Backpacker, Liburan Keluarga, dan Perjalanan Bisnis. Hotel Sidodadi dilengkapi oleh beragam fasilitas penunjang kenyamanan, seperti; non-smoking, Wifi, LED-TV, resepsionis 24 jam, air mineral kemasan, perlengkapan mandi dengan air panas, dan area parkir. Lokasi hotel juga dikelilingi oleh beragam pusat wisata, perbelanjaan dan hiburan utama, seperti; Pasar Kroya (750 m), Wahana Wisata Wanarata (1,5 km), Pasar Kepudang (6,5 km), Pantai Wagir Indah (8,8 km), Pantai Widarapayung (9,9 km), dan Museum Soesilo Soedarman (7,8 km).',
                'lat' => '-7.630679200606893',
                'lng' => '109.25469805296538',
                'kecamatan_id' => '19',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 10. Hotel Srandil
            [
                'name' => 'Hotel Srandil',
                'slug' => 'hotel-srandil',
                'alamat' => 'Jl. Stasiun No.54, Semingkir, Bajing, Kec. Kroya, Kabupaten Cilacap, Jawa Tengah 53282',
                'bintang' => '1',
                'body' => 'Hotel yang cukup dekat dengan Stasiun Kroya sekitar 5 menit. Hotel cukup luas, di depan hotel terdapat warung makan dan semacam minimarket. Di depan minimarket adalah pangkalan ojek online untuk mobil dan motor, jadi kalau nginep gak perlu khawatir susah transportasi, namun untuk mobil online karna hanya sedikit makanya harus nunggu biasanya.
                Untuk kamar terbagi jadi 2 yaitu AC dan non AC. Kamar AC ada di belakang dan kamar non AC ada di depan. Untuk harga kamar AC 200.000 dan non AC 100.000
                Fasilitasnya ada AC tentunya, TV, kamar mandi dalam, selimut, sampo & sabun, handuk, 2 bantal, 2 kursi santai dan coffee morning di depan kamar. Kamar mandi juga cukup bersih, ACnya masih bagus dan dingin, ada kursi di teras kamar. Kamarnya tidak berbau,
                Pelayanannya cukup bagus, 24 jam dan bisa booking lewat telfon.',
                'lat' => '-7.6305466466901155',
                'lng' => '109.25060440991815',
                'kecamatan_id' => '19',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 11. RedDoorz Near Stasiun Kroya
            [
                'name' => 'RedDoorz Near Stasiun Kroya',
                'slug' => 'reddoorz-near-stasiun-kroya',
                'alamat' => 'Jl. Slamet, Dongkelan, Kroya, Kec. Kroya, Kabupaten Cilacap, Jawa Tengah 53282',
                'bintang' => '1',
                'body' => 'Ideal stay option for Family Vacations, Solo, and Business Travelers. Facilities available in RedDoorz near Stasiun Kroya are; non-smoking rooms, 24 hours front desk, WiFi, LED-Tv, toiletries with hot shower, mineral water, and parking area. Popular leisure, shopping center, and entertainment near the guesthouse are;  Pasar Kroya (750 m), Wahana Wisata Wanarata (1.5 km), Pasar Kepudang (6.5 km), Pantai Wagir Indah (8.8 km), Pantai Widarapayung (9.9 km), dan Museum Soesilo Soedarman (7.8 km).',
                'lat' => '-7.633674461825541',
                'lng' => '109.25140292776112',
                'kecamatan_id' => '19',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 12. Hotel Bromo Indah 2
            [
                'name' => 'Hotel Bromo Indah 2',
                'slug' => 'hotel-bromo-indah-2',
                'alamat' => 'Jl. Lingkar Timur No.68, Kebonkelapa, Menganti, Kec. Kesugihan, Kabupaten Cilacap, Jawa Tengah 53274',
                'bintang' => '1',
                'body' => 'Hotel Bromo Indah 2 terletak di l. Lingkar Timur No.68, Kebonkelapa, Menganti, Kec. Kesugihan, Kabupaten Cilacap, Jawa Tengah 53274',
                'lat' => '-7.686343338450099',
                'lng' => '109.07911217001539',
                'kecamatan_id' => '15',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 13. Hotel Tegal Arum
            [
                'name' => 'Hotel Tegal Arum',
                'slug' => 'hotel-tegal-arum',
                'alamat' => 'Kebonkelapa, Menganti, Kesugihan, Cilacap Regency, Central Java 53274',
                'bintang' => '1',
                'body' => 'Hotel Tegal Arum terletak di Kebonkelapa, Menganti, Kesugihan, Kabupaten Cilacap, Jawa Tengah 53274, Indonesia',
                'lat' => '-7.685913079263509',
                'lng' => '109.08106588923664',
                'kecamatan_id' => '15',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 14. Hotel Dafam Cilacap
            [
                'name' => 'Hotel Dafam Cilacap',
                'slug' => 'hotel-dafam-cilacap',
                'alamat' => 'Jl. Dr. Wahidin Sudiro Husodo No.5-15, Dafam Cilacap, Sidakaya, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53211',
                'bintang' => '3',
                'body' => 'otel Dafam Cilacap is the shining Three-Star hotel in Cilacap. The hotel is ideally located near government and business district, shopping center as well as the exotic Teluk Penyu beach. Hotel Dafam Cilacap is just a few minutes drive from railway station and airport. 10 minutes boat ride to Nusa Kambangan Island from Teluk Penyu Beach and 15 minutes drive from Benteng Pendem fortress. Its a reliable hotel for travelers who look for the exceptionally good value, luxurious and comfortable accommodation.
                Serving to give the most luxurious experience for anyone choosing to stay. Hotel Dafam Cilacap offers 102 comfortable rooms, consist of 22 Superior Rooms, 26 Deluxe Rooms, 6 Deluxe pool view, 37 Executive Rooms, 5 Executive pool view, 5 Suite Rooms and 1 Royal Suite Room. All rooms equipped with LCD flat TV with cable channels, keycard censored, free broadband and wifi internet access, individual air conditioning control and other facilities that make you feel comfort and satisfaction.',
                'lat' => '-7.731647388871092',
                'lng' => '109.01489319199703',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 15. Favehotel Cilacap
            [
                'name' => 'Favehotel Cilacap',
                'slug' => 'favehotel-cilacap',
                'alamat' => 'Jl. Budi Utomo No.38, Sidakaya Dua, Sidakaya, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53212',
                'bintang' => '3',
                'body' => 'As a coastal seaport, the city has become a hub for national and international trade whilst also drawing leisure travelers who are eager to visit the citys tourist attraction and experience Banyumas culture. Located just a few minutes from the railway station favehotel Cilacap offers easy access to industrial plants such as Pertamina, Holcim, and geothermal power plant, as well as the famed Sea Turtle Bay and other tourism hotspots. Set among shops and eateries in this coastal seaport city of Cilacap, this relaxed, modern hotel is within walking distance to Teluk Penyu Beach and 2 km from Cilacap railway station. favehotel Cilacap offers great value for both business and leisure travelers. Hotel facilities include a casual restaurant and spa, in addition to a popular rooftop terrace featuring an outdoor swimming pool and laid-back bar with stunning city views. The nearest airport is Tunggul wulung, only 13.2 km from favehotel Cilacap which offers a paid airport shuttle service.
                    Featuring 53 clean contemporary ensuite guest rooms which include vibrant murals, flat-screen TVs, free high-speed WiFi, remote-controlled air-con, tea/coffee making facilities, comfortable beds, plush mattress toppers, fresh linen and towels, complimentary toiletries, and in-room safe.
                    favehotel Cilacap provides contemporary facilities for both our business and leisure guests including a swimming pool, where guests can come and relax and experience breathtaking sunsets from the terrace bar.',
                'lat' => '-7.727005386587635',
                'lng' => '109.01693288241574',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 16. Whiz Prime Cilacap
            [
                'name' => 'Whiz Prime Cilacap',
                'slug' => 'whiz-prime-cilacap',
                'alamat' => 'Jl. Jend. Sudirman No.20, Sidakaya Dua, Sidakaya, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53211',
                'bintang' => '2',
                'body' => 'Whiz Prime Hotel Sudirman Cilacap are Conveniently located in the center of the city, surrounded by government offices, business areas, and several entertainment areas such as Benteng Pendem and Teluk Penyu Beach, Whiz Prime Hotel Sudirman Cilacap offers simply furnished and comfortable room with facilities such as LCD TV, free Wi-Fi access throughout the property, business center and meeting rooms. The hotel is an ideal choice for business and leisure travelers.',
                'lat' => '-7.7275162314436106',
                'lng' => '109.01186727763962',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 17. Atrimun Premiere Cilacap
            [
                'name' => 'Atrium Premiere Cilacap',
                'slug' => 'atrium-premiere-cilacap',
                'alamat' => 'Jl. S. Parman, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53223',
                'bintang' => '4',
                'body' => 'This hotel is the perfect choice for couples seeking a romantic getaway or a honeymoon retreat. Enjoy the most memorable nights with your loved one by staying at Atrium Premiere Hotel Cilacap.
                    Atrium Premiere Hotel Cilacap is the splendid choice for you who are seeking a luxurious treat for your holiday. Get pampered with the most excellent services and make your holiday memorable by staying here.
                    From business event to corporate gathering, Atrium Premiere Hotel Cilacap provides complete services and facilities that you and your colleagues need.
                    Have fun with various entertaining facilities for you and the whole family at Atrium Premiere Hotel Cilacap, a wonderful accommodation for your family holiday.
                    If you plan to have a long-term stay, staying at Atrium Premiere Hotel Cilacap is the right choice for you. Providing wide range of facilities and great service quality, this accommodation certainly makes you feel at home.
                    Be ready to get the unforgettable stay experience by its exclusive service, completed by a full range of facilities to cater all your needs.
                    The hotels fitness center is a must-try during your stay here.
                    Have an enjoyable and relaxing day at the pool, whether youre traveling solo or with your loved ones.
                    Get the best deal for finest quality of spa treatment to unwind and rejuvenate yourself.
                    24-hours front desk is available to serve you, from check-in to check-out, or any assistance you need. Should you desire more, do not hesitate to ask the front desk, we are always ready to accommodate you.
                    Savor your favorite dishes with special cuisines from Atrium Premiere Hotel Cilacap exclusively for you.
                    WiFi is available within public areas of the property to help you to stay connected with family and friends.
                    Atrium Premiere Hotel Cilacap is a hotel with great comfort and excellent service according to most hotels guests.
                    Enjoy luxurious treats and incomparable experience by staying at Atrium Premiere Hotel Cilacap.',
                'lat' => '-7.724562206972053',
                'lng' => '109.01325695682598',
                'kecamatan_id' => '23',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 18. Hotel Aldo
            [
                'name' => 'Hotel Aldo Cilacap',
                'slug' => 'hotel-aldo-cilacap',
                'alamat' => 'Jl. S. Parman No.78-80, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212',
                'bintang' => '1',
                'body' => 'Aldo Hotel merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.
                    Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, Aldo Hotel adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.
                    Desain dan arsitektur menjadi salah satu faktor penentu kenyamanan Anda di hotel. Aldo Hotel menyediakan tempat menginap yang tak hanya nyaman untuk beristirahat, tapi juga desain cantik yang memanjakan mata Anda.
                    Aldo Hotel memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega.
                    Aldo Hotel adalah tempat bermalam yang tepat bagi Anda yang berlibur bersama keluarga. Nikmati segala fasilitas hiburan untuk Anda dan keluarga.
                    Jika Anda berniat menginap dalam jangka waktu yang lama, Aldo Hotel adalah pilihan tepat. Berbagai fasilitas yang tersedia dan kualitas pelayanan yang baik akan membuat Anda merasa sedang berada di rumah sendiri.
                    Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.
                    Terdapat restoran yang menyajikan menu lezat ala Aldo Hotel khusus untuk Anda.
                    WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.
                    Pelayanan yang baik dengan harga terjangkau akan membuat Anda merasa nyaman menginap di Aldo Hotel.',
                'lat' => '-7.72040876923093',
                'lng' => '109.01366041207363',
                'kecamatan_id' => '23',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 19. Hotel @Hom Premiere
            [
                'name' => 'Hotel @Hom Premiere',
                'slug' => 'hotel-@hom-premiere',
                'alamat' => 'Jl. Perintis Kemerdekaan, Amiranom, Kebonmanis, Kec. Cilacap Utara, Kabupaten Cilacap, Jawa Tengah 53535',
                'bintang' => '3',
                'body' => '@HOM Premiere Cilacap merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.
                    Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, @HOM Premiere Cilacap adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.
                    @HOM Premiere Cilacap memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega.
                    @HOM Premiere Cilacap adalah tempat bermalam yang tepat bagi Anda yang berlibur bersama keluarga. Nikmati segala fasilitas hiburan untuk Anda dan keluarga.
                    Jika Anda berniat menginap dalam jangka waktu yang lama, @HOM Premiere Cilacap adalah pilihan tepat. Berbagai fasilitas yang tersedia dan kualitas pelayanan yang baik akan membuat Anda merasa sedang berada di rumah sendiri.
                    Pelayanan memuaskan serta fasilitas hotel yang memadai akan membuat Anda nyaman berada di @HOM Premiere Cilacap.
                    Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.
                    Terdapat restoran yang menyajikan menu lezat ala @HOM Premiere Cilacap khusus untuk Anda.
                    WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.
                    @HOM Premiere Cilacap adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.
                    Dengan fasilitas yang memadai, @HOM Premiere Cilacap menjadi pilihan yang tepat untuk menginap.',
                'lat' => '-7.690659173853116',
                'lng' => '109.03468338427662',
                'kecamatan_id' => '24',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
            // 20. NS Hotel Cilacap
            [
                'name' => 'NS Hotel Cilacap',
                'slug' => 'ns-hotel-cilacap',
                'alamat' => 'Jl. Jend. Ahmad Yani No.115, Kandang Macan, Sidakaya, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53212',
                'bintang' => '2',
                'body' => 'NS Hotel by Dominic memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega.
                    NS Hotel by Dominic adalah tempat bermalam yang tepat bagi Anda yang berlibur bersama keluarga. Nikmati segala fasilitas hiburan untuk Anda dan keluarga.
                    Pelayanan memuaskan serta fasilitas hotel yang memadai akan membuat Anda nyaman berada di NS Hotel by Dominic.
                    Tersedia kolam renang untuk Anda bersantai sendiri maupun bersama teman dan keluarga.
                    Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.
                    Terdapat restoran yang menyajikan menu lezat ala NS Hotel by Dominic khusus untuk Anda.
                    WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.
                    NS Hotel by Dominic adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.
                    Dengan fasilitas yang memadai, NS Hotel by Dominic menjadi pilihan yang tepat untuk menginap.',
                'lat' => '-7.729618615571862',
                'lng' => '109.0093770904764',
                'kecamatan_id' => '22',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            
        ]);
    }
}
