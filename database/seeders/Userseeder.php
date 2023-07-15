<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            // 1. pantai teluk penyu, telukpenyu@email.com
            [
                'name' => 'Pengelola Pantai Teluk Penyu',
                'username' => 'pantaitelukpenyu',
                'email' => 'telukpenyu@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 2. Benteng pendem, bentengpendem@email.com
            [
                'name' => 'Pengelola Benteng Pendem',
                'username' => 'bentengpendem',
                'email' => 'bentengpendem@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 3. Pantai Kamulyan, kamulyan@email.com
            [
                'name' => 'Pengelola Pantai Kamulyan',
                'username' => 'pantaikamulyan',
                'email' => 'kamulyan@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 4. Pulau Nusakambang, nusakambang@email.com
            [
                'name' => 'Pengelola Pulau Nusakambang',
                'username' => 'pulaunusakambang',
                'email' => 'nusakambang@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 5. Pantai Widarapayung, widarapayung@email.com
            [
                'name' => 'Pengelola Pantai Widarapayung',
                'username' => 'pantaiwisarapayung',
                'email' => 'widarapayung@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 6. Pantai ketapang Indah, ketapangindah@email.com
            [
                'name' => 'pengelola Pantai Ketapang Indah',
                'username' => 'ketapangindah',
                'email' => 'ketapangindah@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 7. pantai Sodong, sodong@enail.com
            [
                'name' => 'Pengelola Pantai Sodong',
                'username' => 'pantaisodong',
                'email' => 'sodong@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 8. Gunung Selok, gunungselok@email.com
            [
                'name' => 'Pengelola Gunung Selok',
                'username' => 'gunungselok',
                'email' => 'gunungselok@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 9. Pantai Buton, pantaibuton@email.com
            [
                'name' => 'Pengelola Pantai Buton',
                'username' => 'pantaibuton',
                'email' => 'pantaibuton@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 10. Gunung Srandil, srandil@email.com
            [
                'name' => 'Pengelola Gunung Srandil',
                'username' => 'gunungsrandil',
                'email' => 'gunungsrandil@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 11. Susur Sungai dan Batik mangrove, mangrove@email.com
            [
                'name' => 'Pengelola Batik Mangrove',
                'username' => 'batikmangrove',
                'email' => 'batikmangrove@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 12. Hutan Payau, hutanpayau@email.com
            [
                'name' => 'Pengelola Hutan Payau',
                'username' => 'hutanpayau',
                'email' => 'hutanpayau@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 13. Air panas Cipari, airpanascipari@email.com
            [
                'name' => 'Pengelola Air Panas Cipari',
                'username' => 'airpanascipari',
                'email' => 'airpanascipari@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 14. Curug Mandala, curugmandala@email.com
            [
                'name' => 'Pengelola Curug Mandala',
                'username' => 'curugmandala',
                'email' => 'curugmandala@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 15. Waduk Kubangkangkung, wadukkubangkangkung@email.com
            [
                'name' => 'Pengelola Waduk Kubangkangkung',
                'username' => 'wadukkubangkangkung',
                'email' => 'wadukkubangkangkung@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 16. Havana Hills, havanahills@email.com
            [
                'name' => 'Pengelola Havana Hills',
                'username' => 'havanahills',
                'email' => 'havanahills@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 17. Goa Masigitsela, goamasigitsela@email.com
            [
                'name' => 'Pengelola Goa Masigitsela',
                'username' => 'goamasigitsela',
                'email' => 'goamasigitsela@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            // 18. Museum Soesilo Soedirman museumsoedirman@email.com
            [
                'name' => 'Pengelola Museum Soesilo Soedirman',
                'username' => 'museumsoedirman',
                'email' => 'museumsoedirman@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            
            // 19. Kemit Forest Education, kemitforest@email.com
            [
                'name' => 'Pengelola Kemit Forest Education',
                'username' => 'kemitforest',
                'email' => 'kemitforest@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            
            // 20. Pantai Congot jetis, congotjetis@email.com
            [
                'name' => 'Pengelola Pantai Congot Jetis',
                'username' => 'congotjetis',
                'email' => 'congotjetis@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],

            
            // 21. Pantai Bungso jetis, bungsojetis@email.com
            [
                'name' => 'Pengelola Pantai Bungso jetis',
                'username' => 'bungsojetis',
                'email' => 'bungsojetis@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'editor',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@email.com',
                'password' => bcrypt(12345),
                'user_role' => 'admin',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'), 
            ],
        ]);
    }
}
