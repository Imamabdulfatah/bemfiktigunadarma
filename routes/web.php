<?php

// ini dipermudah dengan PHP Namespace Resolver
// dengan klik kanan => import all class

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\OpenCloseRegist;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemiraController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardCategoryController;
// use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PemiraDashboardController;
use App\Http\Controllers\DashboardContentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     /// ini artinya view mencari ke folder =>  resources/view/welcome
//     /// return untuk mengembalikan nilai ke tampilan
//     // route defaultnya
//     // return view('welcome');
// });

// mengunakan closure
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Udin",
        "email" => "udin123@gmail.com",
        "image" => "me.jpg"
    ]);
});


Route::get('/fungsionaris', function () {
    return view('fungsionaris.index', [
        "title" => "Fungsionaris",
        "active" => "home",
    ]);
});


Route::get('/alumni', function () {
    return view('alumni.index', [
        "title" => "Alumni",
        "active" => "home",
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman sigle posts
// post:slug terhubungke posts.blade.php
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('post');
Route::post('posts/{post:slug}', [CommentsController::class, 'store'])->name('comment');

//categories umum
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'kategori',
        'categories' => Category::all()
    ]);
});

// login 
// middle ware ini mengunakan yang global (app/http/kernel.php)
// merbah default jika sudah login di (app/Providers/RouteSericeProvider)
// mmberi nama agar terdeteksi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// autentification login
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/logout-pemira', [LoginController::class, 'logoutPemira']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::get('/option', [RegisterController::class, 'option'])->middleware('guest');
// Route::get('/studentsite', [RegisterController::class, 'studentsite'])->middleware('auth');
// store untuk menyimpan create = membuat
Route::post('/register', [RegisterController::class, 'store']);
// Route::post('/studentsite', [RegisterController::class, 'post']);


// dashboard
// middleware urtuk memberi tahu sudah login
Route::get('/dashboard', function() {
    return view('dashboard.index', [
        "title" => "Halaman Utama",
        "active" => "utama",
    ]);
})->middleware('auth');


Route::get('/dashboard/comment', [CommentsController::class, 'dashboard'])->middleware('auth');
Route::delete('/dashboard/comment/delete/{id}', [CommentsController::class, 'destroy'])->middleware('auth')->name('comment.delete');

// resouce cotroller
// https://laravel.com/docs/8.x/controllers#resource-controllers
// sebelum mulai install controller  { php artisan make:controller PhotoController --model=Photo --resource }
Route::get('/dashboard/posts/checkSlug', [DashboardContentController::class, 'checkSlug'])->middleware('auth');

Route::get('/dashboard/posts', [DashboardContentController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts/create', [DashboardContentController::class, 'create'])->middleware('auth');
Route::post('/dashboard/posts/create', [DashboardContentController::class, 'store'])->middleware('auth');

Route::get('/dashboard/posts/{post:slug}', [DashboardContentController::class, 'show'])->middleware('auth');
Route::get('/dashboard/posts/{post:slug}/edit', [DashboardContentController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/posts/{post:slug}/update', [DashboardContentController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/posts/{post:slug}/delete', [DashboardContentController::class, 'destroy'])->middleware('auth');

// admin
// except ini yang tidak di pakai di route ini
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');


Route::get('/dashboard/categories', [DashboardCategoryController::class, 'index'])->middleware('auth');
Route::get('/dashboard/categories/create', [DashboardCategoryController::class, 'create'])->middleware('auth');
Route::post('/dashboard/categories/create', [DashboardCategoryController::class, 'store'])->middleware('auth');
Route::get('/dashboard/{category:slug}/edit', [DashboardCategoryController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/{category:slug}/update', [DashboardCategoryController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/{category:slug}/delete', [DashboardCategoryController::class, 'destroy'])->middleware('auth');


Route::get('/pemira', function (User $user) {
    return view('pemira.index', [
        "title" => "Pemira",
        "active" => "pemira",
        "hitung" => $user->count('kandidat'),
        "openclose" => OpenCloseRegist::all(),
    ]);
});

Route::get('/regist-pemira', [RegisterController::class, 'registPemira'])->middleware('guest');
Route::post('/regist-pemira', [RegisterController::class, 'userPemira'])->middleware('guest');
Route::get('/login-pemira', [LoginController::class, 'show'])->middleware('guest');
Route::post('/login-pemira', [LoginController::class, 'authuser'])->middleware('guest');

// Route::get('/data-diri', [PemiraController::class, 'index'])->middleware('guest');
// Route::post('/data-diri', [PemiraController::class, 'authenticate']);

Route::get('/vote', [PemiraController::class, 'vote'])->middleware('auth');
Route::put('/vote', [PemiraController::class, 'storeVote'])->middleware('auth');



Route::get('/dashboard-admin', [PemiraDashboardController::class, 'index'])->middleware('auth');
Route::put('/dashboard-admin/{id}', [PemiraDashboardController::class, 'openclose'])->name('status.update')->middleware('auth');

Route::get('/dashboard-admin/vote', [PemiraDashboardController::class, 'show'])->middleware('auth');
Route::delete('/dashboard-admin/vote/delete/{id}', [PemiraDashboardController::class, 'delete'])->name('vote.failed')->middleware('auth');


Route::get('/dashboard-admin/pendaftaran', [PemiraDashboardController::class, 'regist'])->middleware('auth');
Route::post('/dashboard-admin/pendaftaran', [PemiraDashboardController::class, 'store'])->middleware('auth');
Route::delete('/dashboard-admin/pendaftaran/delete/{id}', [PemiraDashboardController::class, 'hapus'])->name('dataset.delete')->middleware('auth');
Route::put('/dashboard-admin/vote-pendaftaran/update/{id}', [PemiraDashboardController::class, 'update'])->middleware('auth');
Route::get('/dashboard-admin/vote-pendaftaran/update/{id}', [PemiraDashboardController::class, 'edit'])->name('dataset.edit')->middleware('auth');
Route::get('/dashboard-admin/vote-pendaftaran', [PemiraDashboardController::class, 'data'])->middleware('auth');

Route::get('/dashboard-admin/hasil', [PemiraDashboardController::class, 'output'])->middleware('auth');

// 7. database
// - https://laravel.com/docs/9.x/migrations#main-content
// ini menggunakan database mysql secara defaulnya
// 1. buat nama database saja di mysql workbench
// 2. sebelumnya cek di .env daftarnya sesuaikan 
// 3. Lalu isi database dari migration{ php artisan migrate}
// 4. lihat nanti ada isinya di database -> migrations
// 5. untuk down database maka { php artisan migrate:rollback } -> ini akan menjalankan function down
// 6. untuk drop dan mengembalikan migrations {php artisan migrate:fresh} -> untuk mengubah di migrations lalu dipush ulang
// 7. jika sudah selesai maka .env dirubah ke production

// bentuk database dilaravel Eloquent orm
// - https://laravel.com/docs/8.x/eloquent
// - https://en.wikipedia.org/wiki/Active_record_pattern
// { php artisan tinker }

// membuat model sekalian migrate dan nama model
// php artisan make:model -m Category


// tentang seeding video 9
// - menulis database otomatis
// https://laravel.com/docs/8.x/seeding#main-content
// bentuk model di database/DatabaseDeeder
// lalu  {php artisan db:seed}
// jika ingin mengubah tapi satu email atau slugnya
// { php artisan migrate:fresh --seed }

// Factories video 10
// membuat data palsu untuk database
// merubah data sesuai negara
// masuk -> config -> app -> cari locale faker  
// lalu rubah  {env('FAKER_LOCALE','en_US'),}
// ke .env
// membuat factories sendiri { php artisan make:factory PostFactory }
// CONTOH MEMBUAT SEKALIGUS { php artisan make:model -mfs}


// video ke 11 (N+1 Problem)
// - ini biasanya terjadi ketika kita mengambil data dari database

// di web kita ini n+1 problem di posts.blade.php melakukan looping penulisan database
// install untuk clockwork/ melihat query yang dipkai { composer require itsgoingd/clockwork }
// lalu instal di extention chrome  clockwork   
// kemudian inspect lalu cari clock work
// teknik eager loading di PostController


// cara menghapus data  di workbench
// 1. klik column yang mau dihapus lalu klik delete row
// 2. klik apply yang dibawah lalu finish

// membuat resouce controler
// https://laravel.com/docs/8.x/controllers#resource-controllers
// Yoitu membuat route yang sudah ada crudnya 

// melihat semua route
// php artisan route:list


// cara upload file photo
// 1. gunakan input file di bootsrap -> https://getbootstrap.com/docs/5.0/forms/form-control/#file-input
// 2. untuk memasukan file perlu ditambahkan ( enctype="multipart/form-data" )
// 3. sesuaikan di Dashboard
// 4. lihat konfigurasi di laravel  -> https://laravel.com/docs/8.x/filesystem#main-content
// 5. lihat ke config/filesystem.php default local kita bisa ubah langsung diganti public atau ke env  taruh paling bawah FILESYSTEM_DISK=public
// 6. menghubungkan public storange dengan resource denngan symbolic link ( php artisan storage:link ) 
// 7. ubah pola dari database dai create_posts_table.php
// 8. lakukan migrasi dan seeder { php artisan migrate:fresh --seed }

// Atorization
// https://laravel.com/docs/8.x/authorization#main-content
// 1. buat terlebih dahulu contorller { php artisan make:controller AdminCategoryController --model=category  --resource }
// 2. Buat route di web
// 3. membuat middleware sendiri { php artisan make:middleware IsAdmin } sesuai kebutuhan
// 4. daftarin middleware di kenel.php dan berinama dan nama masukin ke route web
// 5. kita gunakan gate konfigrurasi di App\Provider\AppServiceProvider karena kita pake gate kita hapus middlewarenya
// 6. menyisipkan migrasi ke table user {php artisan make:migration} nama : add_is_admin_to_users_table   -> No  -> Yes -> users
// 7. rubah user di database  is_admin = 1 lalu rubah di IsAdmin dan Provider