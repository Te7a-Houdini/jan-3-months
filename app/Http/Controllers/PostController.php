<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //require('app/Post')
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        // $userModelObject = request()->user();

        // dd($userModelObject->posts);
        //Post::class == App\Post
        return view('posts.index', [
            'thisIsViewPosts' => Post::all()
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        //title                //slug
        //World Journey        //world-jounery

        //alternative
        // $post = new Post;
        // $post->title = request()->title;
        // $post->content = request()->content;
        // $post->save();
        
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user()->id
        ]);

        return redirect()->route('posts.index');
    }

    public function show($post)
    {
        return $post;   //another way return request()->post;
    }
}
