<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts', compact('posts'));
    }

    public function create(Request $request) {
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->tel = $request->session()->get('login-tel');

        $post->save();
        return redirect('/');
    }
}
