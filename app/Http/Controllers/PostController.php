<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index () 
    {
        return view('posts.index',[
            'posts' => [
                [
                    'id' => 1,
                    'title' => 'First Post',
                    'content' => 'Any Thing',
                    'created_at' => '2019-01-20'
                ],
                [
                    'id' => 2,
                    'title' => 'Second Post',
                    'content' => 'Any Content',
                    'created_at' => '2019-02-30'
                ],
            ]
        ]);
    }
    function create()
    {
        return view('posts.create');
    }
}
