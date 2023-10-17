<?php

// ini dipermudah dengan PHP Namespace Resolver
// dengan klik kanan => import all class

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;


use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardGaleriController;
use App\Http\Controllers\DashboardContentController;
use App\Http\Controllers\DashboardCategoryController;

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

Route::get('/jurnal', function () {
    return view('page/jurnal', [
        "title" => "About",
        "active" => "about",
        "nama" => "Udin",
        "email" => "udin123@gmail.com",
        "image" => "me.jpg"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    // return view('auth.reset-password', ['token' => $token]);
    return "berhasil";
})->middleware('guest')->name('password.reset');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');


 
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('post');
// Route::post('posts/{post:slug}', [CommentsController::class, 'store'])->name('comment');

// //categories umum
// Route::get('/categories', function() {
//     return view('categories', [
//         'title' => 'Post Categories',
//         'active' => 'kategori',
//         'categories' => Category::all()
//     ]);
// });


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

Route::get('/dashboard/galeri', [DashboardGaleriController::class, 'index'])->middleware('auth');
Route::get('/dashboard/galeri/create', [DashboardGaleriController::class, 'create'])->middleware('auth');
Route::post('/dashboard/galeri/create', [DashboardGaleriController::class, 'store'])->middleware('auth');

Route::get('/dashboard/posts/{post:slug}', [DashboardContentController::class, 'show'])->middleware('auth');
Route::get('/dashboard/posts/{post:slug}/edit', [DashboardContentController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/posts/{post:slug}/update', [DashboardContentController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/posts/{post:slug}/delete', [DashboardContentController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard/posts', [DashboardGaleriController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts/create', [DashboardContentController::class, 'create'])->middleware('auth');
Route::post('/dashboard/posts/create', [DashboardContentController::class, 'store'])->middleware('auth');

Route::get('/dashboard/galeri/{post:slug}', [DashboardGaleriController::class, 'show'])->middleware('auth');
Route::get('/dashboard/galeri/{post:slug}/edit', [DashboardGaleriController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/galeri/{post:slug}/update', [DashboardGaleriController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/galeri/{post:slug}/delete', [DashboardGaleriController::class, 'destroy'])->middleware('auth');

// admin
// except ini yang tidak di pakai di route ini
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');


Route::get('/dashboard/categories', [DashboardCategoryController::class, 'index'])->middleware('auth');
Route::get('/dashboard/categories/create', [DashboardCategoryController::class, 'create'])->middleware('auth');
Route::post('/dashboard/categories/create', [DashboardCategoryController::class, 'store'])->middleware('auth');
Route::get('/dashboard/{category:slug}/edit', [DashboardCategoryController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/{category:slug}/update', [DashboardCategoryController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/{category:slug}/delete', [DashboardCategoryController::class, 'destroy'])->middleware('auth');


