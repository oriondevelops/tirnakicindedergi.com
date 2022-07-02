<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentSubmissionController;
use App\Http\Controllers\GalleryController;
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
        'posts' => WinkPost::published()
            ->live()
            ->with(['tags', 'author'])
            ->orderBy('publish_date', 'DESC')
            ->take(6)
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

Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::inertia('volumes', 'Volumes')->name('volumes');
Route::inertia('about', 'About')->name('about');
Route::inertia('contact', 'Contact')->name('contact');
Route::post('contact', ContactController::class)->name('contact.post');
Route::post('content', ContentSubmissionController::class)->name('content.post');
Route::get('{slug}', [PostController::class, 'show'])->name('single');

require __DIR__ . '/auth.php';
