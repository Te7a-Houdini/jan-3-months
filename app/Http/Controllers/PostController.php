<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //require('app/Post')
class PostController extends Controller
{
    function index () 
    {
        return view('posts.index',[
            'posts' => Post::all()
        ]);
    }
    function create()
    {
        return view('posts.create');
    }

    function store()
    {
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

    function show($post)
    {
        return $post;   //another way return request()->post;
    }
}
