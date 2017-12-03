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
        $reqTitle = $request->input('title');
        $post->body = $request->input('body');
        $post->hashcode = $request->session()->get('login-tel');
        $post->title = $reqTitle;

        $post->save();

        $title = Post::where('title', $reqTitle)->first();

        if ($title !== null) {
            $hashcode = $title->hashcode;
            error_log($hashcode);

        }

        $post->save();
        return redirect('/');
    }
}
