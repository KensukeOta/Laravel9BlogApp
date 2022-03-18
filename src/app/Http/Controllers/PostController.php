<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest()->get();
        return view('index')->with('posts', $posts);
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->save();

        return to_route('posts.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        if (Auth::id() === $post->user_id) {
            return view('posts.edit')->with('post', $post);
        } else {
            return to_route('posts.index');
        }
    }

    public function update($id, PostRequest $request)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return to_route('posts.show', $post->id);
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return to_route('posts.index');
    }
}
