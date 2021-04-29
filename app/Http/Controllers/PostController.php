<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('estado', 2)->latest('id_post')->paginate(8);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $similares = Post::where('id_categoria', $post->id_categoria)
                            ->where('estado', 2)
                            ->where('id_post', '!=', $post->id_post)
                            ->latest('id_post')
                            ->take(4)
                            ->get();
        return view('posts.show', compact('post', 'similares'));
    }

    public function categoria(Categoria $categoria)
    {
        $posts = Post::where('id_categoria', $categoria->id_categoria)
            ->where('estado', 2)
            ->latest('id_post')
            ->paginate(5);
        return view('posts.categoria', compact('posts', 'categoria'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->where('estado', 2)->latest('id_post')->paginate(4);
        return view('posts.tag', compact('posts', 'tag'));
    }
}
