<?php

use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Wink\WinkPost;

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

// TODO Remove ziggy and public routes
// TODO Check and set ziggy filtering
// TODO Add favicon

Route::get('/', function () {
    return Inertia::render('Home/Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'posts' => WinkPost::published()
            ->live()
            ->with(['tags', 'author'])
            ->get()
            ->map(function ($post) {
                return [
                    'title' => $post->title,
                    'excerpt' => $post->excerpt,
                    'slug' => $post->slug,
                    'publish_date' => $post->publish_date->translatedFormat('m F, Y'),
                    'author' => $post->author,
                ];
            }),
    ]);
})->name('welcome');

Route::inertia('volumes', 'Volumes')->name('volumes');
Route::inertia('about', 'About')->name('about');
Route::inertia('contact', 'Contact')->name('contact');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('{slug}', [PostController::class, 'show'])->name('single');

require __DIR__ . '/auth.php';
