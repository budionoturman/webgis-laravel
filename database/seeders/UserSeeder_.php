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
        // 1. pantai teluk penyu, telukpenyu@email.com
        // 2. Benteng pendem, bentengpendem@email.com
        // 3. Pantai Kamulyan, kamulyan@email.com
        // 4. Pulau Nusakambang, nusakambang@email.com
        // 5. Pantai Widarapayung, widarapayung@email.com
        // 6. Pantai ketapang Indah, ketapangindah@email.com
        // 7. pantai Sodong, sodong@enail.com
        // 8. Gunung Selok, selok@email.com
        // 9. Pantai Buton, buton@email.com
        // 10. Gunung Srandil, srandil@email.com
        // 11. Susur Sungai dan Batik mangrove, mangrove@email.com
        // 12. Hutan Payau, hutanpayau@email.com
        // 13. Air panas Cipari, airpanascipari@email.com
        // 14. Curug Mandala, curugmandala@email.com
        // 15. Waduk Kubangkangkung, wadukkubangkangkung@email.com
        // 16. Havana Hills, havanahills@email.com
        // 17. Goa Masigitsela, goamasigitsela@email.com
        // 18. Museum Soesilo Soedirman museumsoedirman@email.com
        // 19. Kemit Forest Education, kemitforest@email.com
        // 20. Pantai Congot jetis, congotjetis@email.com
        // 21. Pantai Bungso jetis, bungsojetis@email.com
        DB::table('users')->delete();
        DB::table('users')->insert([
            // 1. pantai teluk penyu, telukpenyu@email.com
            [
                'name' => 'Pengelola Pantai Teluk Penyu',
                'username' => 'pantaitelukpenyu',
                'email' => 'telukpenyu@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 2. Benteng pendem, bentengpendem@email.com
            [
                'name' => 'Pengelola Benteng Pendem',
                'username' => 'bentengpendem',
                'email' => 'bentengpendem@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 3. Pantai Kamulyan, kamulyan@email.com
            [
                'name' => 'Pengelola Pantai Kamulyan',
                'username' => 'pantaikamulyan',
                'email' => 'kamulyan@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 4. Pulau Nusakambang, nusakambang@email.com
            [
                'name' => 'Pengelola Pulau Nusakambang',
                'username' => 'pulaunusakambang',
                'email' => 'nusakambang@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 5. Pantai Widarapayung, widarapayung@email.com
            [
                'name' => 'Pengelola Pantai Widarapayung',
                'username' => 'pantaiwisarapayung',
                'email' => 'widarapayung@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 6. Pantai ketapang Indah, ketapangindah@email.com
            [
                'name' => 'pengelola Pantai Ketapang Indah',
                'username' => 'ketapangindah',
                'email' => 'ketapangindah@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 7. pantai Sodong, sodong@enail.com
            [
                'name' => 'Pengelola Pantai Sodong',
                'username' => 'pantaisodong',
                'email' => 'sodong@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 8. Gunung Selok, gunungselok@email.com
            [
                'name' => 'Pengelola Gunung Selok',
                'username' => 'gunungselok',
                'email' => 'gunungselok@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 9. Pantai Buton, pantaibuton@email.com
            [
                'name' => 'Pengelola Pantai Buton',
                'username' => 'pantaibuton',
                'email' => 'pantaibuton@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 10. Gunung Srandil, srandil@email.com
            [
                'name' => 'Pengelola Gunung Srandil',
                'username' => 'gunungsrandil',
                'email' => 'gunungsrandil@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 11. Susur Sungai dan Batik mangrove, mangrove@email.com
            [
                'name' => 'Pengelola Batik Mangrove',
                'username' => 'batikmangrove',
                'email' => 'batikmangrove@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 12. Hutan Payau, hutanpayau@email.com
            [
                'name' => 'Pengelola Hutan Payau',
                'username' => 'hutanpayau',
                'email' => 'hutanpayau@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 13. Air panas Cipari, airpanascipari@email.com
            [
                'name' => 'Pengelola Air Panas Cipari',
                'username' => 'airpanascipari',
                'email' => 'airpanascipari@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 14. Curug Mandala, curugmandala@email.com
            [
                'name' => 'Pengelola Curug Mandala',
                'username' => 'curugmandala',
                'email' => 'curugmandala@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 15. Waduk Kubangkangkung, wadukkubangkangkung@email.com
            [
                'name' => 'Pengelola Waduk Kubangkangkung',
                'username' => 'wadukkubangkangkung',
                'email' => 'wadukkubangkangkung@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 16. Havana Hills, havanahills@email.com
            [
                'name' => 'Pengelola Havana Hills',
                'username' => 'havanahills',
                'email' => 'havanahills@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 17. Goa Masigitsela, goamasigitsela@email.com
            [
                'name' => 'Pengelola Goa Masigitsela',
                'username' => 'goamasigitsela',
                'email' => 'goamasigitsela@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            // 18. Museum Soesilo Soedirman museumsoedirman@email.com
            [
                'name' => 'Pengelola Museum Soesilo Soedirman',
                'username' => 'museumsoedirman',
                'email' => 'museumsoedirman@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            
            // 19. Kemit Forest Education, kemitforest@email.com
            [
                'name' => 'Pengelola Kemit Forest Education',
                'username' => 'kemitforest',
                'email' => 'kemitforest@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            
            // 20. Pantai Congot jetis, congotjetis@email.com
            [
                'name' => 'Pengelola Pantai Congot Jetis',
                'username' => 'congotjetis',
                'email' => 'congotjetis@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],

            
            // 21. Pantai Bungso jetis, bungsojetis@email.com
            [
                'name' => 'Pengelola Pantai Bungso jetis',
                'username' => 'bungsojetis',
                'email' => 'bungsojetis@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor'
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'admin'
            ],
        ]);
    }
}
