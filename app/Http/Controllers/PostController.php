<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Wink\WinkPost;

class PostController extends Controller
{
    /**
     * List all posts.
     *
     * @return \Inertia\Response
     */
    public function index($slug)
    {
        return Inertia::render('Posts/Single', [
            'post' => WinkPost::find(['slug' => $slug])
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
                ->with(['author'])
                ->first() ?? abort(404);
        return Inertia::render('Posts/Single', [
            'post' => $post,
            'content' => $post->content,
            'publish_date' => $post->publish_date->translatedFormat('m F, Y')
        ]);
    }
}
