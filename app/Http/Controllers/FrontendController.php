<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function blog()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }
}
