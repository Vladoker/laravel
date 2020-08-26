<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Post::where('status', 'published')->get();
        $popularPosts = Post::where('featured', '1')->get();

        return view('blogs.blogs', compact('posts', 'popularPosts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blogs.article', compact('post'));
    }

    public function category($category)
    {
        $category = Category::where('slug', $category)->first();
        $posts = Post::where('category_id', $category->id)->get();

        return view('blogs.article', compact('posts'));
    }

}
