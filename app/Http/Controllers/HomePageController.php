<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Routing\Controller as BaseController;

class HomePageController extends BaseController
{
    public function hello()
    {
        return view('hello');
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts')->with(['posts' => $posts]);
    }
}
