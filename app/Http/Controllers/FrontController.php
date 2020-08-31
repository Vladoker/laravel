<?php


namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;


class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::get()->sortBy('order');
        return view('home', compact('categories'));
    }

    public function about(){
        $comments = Comment::where('status', '1')->get();
        return view('about', compact('comments'));
    }

    public function contacts(){
        return view('contacts');
    }
}
