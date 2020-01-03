<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //require('app/Post')

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $validatedData = request()->validate([
            'title' => 'required|min:5',
            'content' => 'required',
        ]);
        //alternative
        // $post = new Post;
        // $post->title = request()->title;
        // $post->content = request()->content;
        // $post->save();
        
        Post::create([
            'title' => request()->title,
            'content' => request()->content
        ]);

        return redirect()->route('posts.index');
    }

    public function show($post)
    {
        return $post;   //another way return request()->post;
    }
}
