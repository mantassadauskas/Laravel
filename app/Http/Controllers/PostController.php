<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
//        $post = Post::all();
        $post = Post::latest()->get();
        return view ('posts.index', compact ('post'));
    }

    public function create()
    {
        return view ('posts.create');
    }

    public function store()
    {
        $this->validate (request(), [
            'title'=> 'required',
        'textarea'=> 'required|min:10'
        ]);
$post = new Post;

$post->title = request ('title');
$post->textarea = request ('textarea');
$post->save();
return redirect ('/');
//        return view ('posts.store');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view ('posts.show', compact ('post'));
    }
}
