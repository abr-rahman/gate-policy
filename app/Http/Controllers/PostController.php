<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('policy.index', compact('posts'));
    }
    public function show(Post $post)
    {
        $this->authorize('view', $post);
        return view('policy.show')->with('post', $post);
    }
    public function create()
    {
        return view('policy.create');
    }
    public function store(Request $request){
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id(),
        ]);
        return back();
    }
    function delete($id){
        $post = Post::find($id);
        $post->delete();
        return back();
    }

}
