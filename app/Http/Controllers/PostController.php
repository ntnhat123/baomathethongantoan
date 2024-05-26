<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'string',
        ]);

        $post = Post::create($request->all());


        return redirect()->route('posts.show', $post->id)->with('success', 'Post created successfully');


    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('showpost', compact('post'));
    }
}
