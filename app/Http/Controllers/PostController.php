<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        //Post:where('slug',$post)->findOrFail();
        return view('posts.show', [
            'post' => $post //Post::findOrFail($id) //This Concept is Known by rout model binding
        ]);
    }
}
