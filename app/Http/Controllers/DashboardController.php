<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.dashboard', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
	{
	    $post = new Post;
	    $post->title = $request->title;
	    $post->body = $request->body;
	    $post->save();

	    return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
	}

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
