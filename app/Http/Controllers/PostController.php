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
        $newPost = new Post;
        $reqTitle = $request->input('title');
        $message = $request->input('body');
        $newPost->body = $message;
        $newPost->hashcode = $request->session()->get('login-tel');
        $newPost->title = $reqTitle;

        $oldPost = Post::where('title', $reqTitle)->first();

        if ($oldPost !== null) {
            $hashcode = $oldPost->hashcode;
            $matchPost = Post::where('hashcode', $hashcode)->first();

            $body = $matchPost->body;
            error_log($hashcode);
            $api = new ApiController();
            $api->send($message, $body);
        }

        $newPost->save();
        return redirect('/');
    }
}
