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
            'nama' => 'BEM Fikti UG',
            'email' => 'bemfikti@gmail.com',
            'nidn' => '20121592',
            'is_admin' => '1',
            'password' => bcrypt('BemFikti2022-2023sukses')
        ]);

        
        User::create([
            'nama' => 'Creator1',
            'email' => 'creator1@gmail.com',
            'nidn' => '20121592',
            'password' => bcrypt('Creator1Kreatif')
        ]);

        User::create([
            'nama' => 'Creator2',
            'email' => 'creator2@gmail.com',
            'nidn' => '20121592',
            'password' => bcrypt('Creator2Inovatif')
        ]);

        User::create([
            'nama' => 'Admin Pemira',
            'email' => 'imamabdul8875@gmail.com',
            'nidn' => '13082024',
            'password' => bcrypt('Pemira2024Terbaik')
            // password = Pem1ra2o23Lancar
        ]);

        // User::create([
        //     'name' => 'MAS ZAM ZAM',
        //     // karena unique maka tidak bisa ditambah yang sama
        //     'email' => 'zam123@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        
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
