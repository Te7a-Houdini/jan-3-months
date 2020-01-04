<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $tempArr = [];

        foreach($posts as $post){
            $tempArr [] = [
                'id' => $post->id,
                'title' => $post->title,
            ];
        }

        return $tempArr;
    }

    public function show($id)
    {
        $post = Post::find($id);
        return [
            'id' => $post->id,
            'title' => $post->title,
        ];
    }
}
