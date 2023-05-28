<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/appointment', [PagesController::class, 'appointment'])->name('appointment');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/detail/{slug}', [PagesController::class, 'detail'])->name('detail');
Route::get('/price', [PagesController::class, 'price'])->name('price');
Route::get('/search', [PagesController::class, 'search'])->name('search');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::get('/testimonial', [PagesController::class, 'testimonial'])->name('testimonial');
Route::get('/service', [PagesController::class, 'service'])->name('service');
Route::get('/signup', [PagesController::class, 'signup'])->name('signup');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('store-form', [App\Http\Controllers\PostController::class, 'store']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
