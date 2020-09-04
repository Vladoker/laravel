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
        $posts = $this->getPosts();
        $popularPosts = $this->getFeaturedPosts();
        $categories = $this->getCategories();

        return view('blogs.blogs', compact('posts', 'popularPosts', 'categories'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $comments = $post->comments->filter(function ($comment){
            return $comment['status'] == 1;
        });
        $categories = $this->getCategories();

        $popularPosts = $this->getFeaturedPosts();

        return view('blogs.article', compact('post', 'comments', 'categories','popularPosts'));
    }


    public function store(Request $request){
        $data = $request->all();
        $data['status'] = 1;

        if(Comment::create($data)){
            return back()->withInput();
        }
    }

    private function getPosts() {
        return Post::where('status', 'published')->with('comments','myCategory')->get();
    }

    private function getFeaturedPosts(){
        return $this->getPosts()->filter(function ($post){
            return $post['featured'] == 1;
        });
    }
    private function getCategories() {
        return CategoryPost::with('posts')->get();
    }

}
