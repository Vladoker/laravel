<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Comment;
use App\Models\FooterImage;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = $this->getPosts();
        $popularPosts = $this->getFeaturedPosts();
        $categories = $this->getCategories();
        $footerImages = FooterImage::get();
        return view('blogs.blogs', compact('posts', 'popularPosts', 'categories', 'footerImages'));
    }

    public function show($slug)
    {
        $post = Post::bySlug($slug)->firstOrFail();
        $comments = $post->comments->filter(function ($comment){
            return $comment['status'] == 1;
        });
        $categories = $this->getCategories();

        $popularPosts = $this->getFeaturedPosts();

        return view('blogs.article', compact('post', 'comments', 'categories','popularPosts'));
    }


    public function store(Request $request){
        Comment::create($request->all());
        return redirect()->back();
    }


    private function getPosts() {
        return Post::active()->with('comments','myCategory')->paginate(6);
    }
    private function getFeaturedPosts(){
        return Post::active()->where('featured', 1)->with('comments','myCategory')->get();
    }
    private function getCategories() {
        return CategoryPost::with('posts')->get();
    }

}
