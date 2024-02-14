<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ListController extends Controller
{
    public function List()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        return response()->view('flower-list', [
            'posts' => $posts,
        ]);
    }
}
