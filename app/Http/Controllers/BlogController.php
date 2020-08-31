<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Post::where('status', 'published')->with('comments')->get();
        $popularPosts =  $posts->filter(function ($post){
            return $post['featured'] == 1;
        });
//        $popularPosts = Post::where('featured', '1')->get();

        return view('blogs.blogs', compact('posts', 'popularPosts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $comments = $post->comments->filter(function ($comment){
            return $comment['status'] == 1;
        });

        return view('blogs.article', compact('post', 'comments'));
    }

    public function category($category)
    {
        $category = Category::where('slug', $category)->first();
        $posts = Post::where('category_id', $category->id)->get();

        return view('blogs.article', compact('posts'));
    }

    public function store(Request $request){
        $comment = new Comment();

        $data = $request->only('name', 'email', 'url', 'message', 'id', 'type');
        $comment->name = $data['name'];
        $comment->email = $data['email'];
        $comment->url = $data['url'];
        $comment->comment = $data['message'];
        $comment->commentable_id = $data['id'];
        $comment->commentable_type = $data['type'];
        $comment->status = 1;
        $comment->save();
        return back()->withInput();
    }

}
