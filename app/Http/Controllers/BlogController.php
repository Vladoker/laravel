<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Comment;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{



    public function index()
    {
        $posts = Post::where('status', 'published')->with('comments')->get();
        $popularPosts =  $posts->filter(function ($post){
            return $post['featured'] == 1;
        });

        $categories = CategoryPost::take(5)->get();

        return view('blogs.blogs', compact('posts', 'popularPosts', 'categories'));
    }



    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $comments = $post->comments->filter(function ($comment){
            return $comment['status'] == 1;
        });

        return view('blogs.article', compact('post', 'comments'));
    }


    public function store(Request $request){
        $data = $request->all();
        $data['status'] = 1;

        if(Comment::create($data)){
            return back()->withInput();
        }
    }

}
