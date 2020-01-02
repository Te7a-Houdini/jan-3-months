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
        //logic to store the data in DB
        $post = new Post;
        $post->title = request()->title;
        $post->content = request()->content;
        $post->save();
        
        return redirect()->route('posts.index');
    }

    function show($post)
    {
        return $post;   //another way return request()->post;
    }
}
