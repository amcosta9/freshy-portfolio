<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        return view('home')->with(['posts' => $posts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // TODO: Add some validation here.
        $newPost = new Post();
        $newPost->title = $request->title;
        $newPost->body = $request->body;
        $newPost->save();

        return redirect("/home");
    }
}
