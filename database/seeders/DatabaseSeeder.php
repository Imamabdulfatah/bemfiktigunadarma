<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\OpenCloseRegist;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // membauat data secara acak oleh laravel
       

        User::create([
            'name' => 'BEM Fikti UG',
            'username' => 'BEM FIKTI 2022/2023',
            'email' => 'bemfikti@gmail.com',
            'npm' => '20121592',
            'class' => 'Umum',
            'is_admin' => '1',
            'password' => bcrypt('BemFikti2022-2023sukses')
        ]);

        
        User::create([
            'name' => 'Creator1',
            'username' => 'Creator Utama 2022/2023',
            'email' => 'creator1@gmail.com',
            'npm' => '20121592',
            'class' => 'Umum',
            'password' => bcrypt('Creator1Kreatif')
        ]);

        User::create([
            'name' => 'Creator2',
            'username' => 'Creator Kedua 2022/2023',
            'email' => 'creator2@gmail.com',
            'npm' => '20121592',
            'class' => 'Umum',
            'password' => bcrypt('Creator2Inovatif')
        ]);

        
        User::create([
            'name' => 'Creator3',
            'username' => 'Creator Ketiga 2022/2023',
            'email' => 'creator3@gmail.com',
            'npm' => '20121592',
            'class' => 'Umum',
            'password' => bcrypt('Creator3Praktis')
        ]);

        User::create([
            'name' => 'Admin Pemira',
            'username' => 'Pemira2024TerbaikSukses',
            'email' => 'pemira2023@gmail.com',
            'npm' => '13082024',
            'class' => 'Umum',
            'password' => bcrypt('Pemira2024Terbaik')
            // password = Pem1ra2o23Lancar
        ]);

        // User::create([
        //     'name' => 'MAS ZAM ZAM',
        //     // karena unique maka tidak bisa ditambah yang sama
        //     'email' => 'zam123@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        
        OpenCloseRegist::create([
            'status' => 'open',
        ]);

        // User::factory(15)->create();


        Category::create([
            'name' => 'Kampus Merdeka',
            'slug' => 'kampus-merdeka'
        ]);

        Category::create([
            'name' => 'Universitas Gunadarma',
            'slug' => 'universitas-gunadarma'
        ]);

        Category::create([
            'name' => 'Internal BEM FIKTI',
            'slug' => 'internal-bem-fikti'
        ]);


        // Post::factory(25)->create();
    }
}
