<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Wink\WinkPost;

class PostController extends Controller
{
    /**
     * List all posts.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Posts/Index', [
            'posts' => WinkPost::published()
                ->live()
                ->with(['tags', 'author'])
                ->orderBy('publish_date', 'DESC')
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
    }

    /**
     * Show the single post.
     *
     * @return \Inertia\Response
     */
    public function show($slug)
    {
        $post = WinkPost::where(['slug' => $slug])
                ->published()
                ->live()
                ->with(['author', 'tags'])
                ->first() ?? abort(404);

        return Inertia::render('Posts/Single', [
            'post' => $post,
            'content' => (string) $post->content,
            'publish_date' => $post->publish_date->translatedFormat('m F, Y'),
        ]);
    }
}
