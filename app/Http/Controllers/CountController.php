<?php

namespace App\Http\Controllers;

use App\Models\Post;


class CountController extends Controller
{
    public function movie()
    {
        $posts = Post::all(); 

        return view('movie', ['posts' => $posts]); 
    }
}